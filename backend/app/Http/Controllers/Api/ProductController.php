<?php

namespace App\Http\Controllers\API;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;
use function PHPUnit\Framework\arrayHasKey;
use function Symfony\Component\Translation\t;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        //


        $query = Product::query();
        $per_page = $request->per_page ?? 10;
        if ($request->has("products_categories_id")) {
            $query = $query->where("products_categories_id", $request->products_categories_id);
        }
        $query = $query->paginate($per_page);

        return \ApiService::success(new ModelCollection($query));
    }

    public function show(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product === null) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_NOT_EXIST);
        }
        return \ApiService::success(new  ProductResource($product));
    }
    public  function search(Request $request){
        if(!$request->has('keyword')){
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_FAIL_VALIDATION);
        }
        else {
            $keyword = $request->keyword;

            $product = Product::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->get()->toArray();

            $product_category = ProductCategory::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->get()->toArray();


            $service_category = ServiceCategory::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->get()->toArray();

            $service = Service::query()
                ->where('name', 'LIKE', "%{$keyword}%")
                ->get()->toArray();
            return \ApiService::success([
                "product" => $product,
                "product_category" => $product_category,
                "service" => $service,
                "service_category" => $service_category
            ]);
        }
    }
    public function product_recommend(Request $request)
    {
        /*
         * 1. Tìm kiếm lấy danh sách order có chứa sản phẩm này
         * 2. Tìm xem top sản phẩm nào được mua cùng nhiều nhất
         * 3. trả về kết quả
         */
        $product_id = $request->product_id;
        $order_products = OrderProduct::query()->where("product_id", $product_id)->get()->toArray();
        $map_relation_product = [];
        $count_total_score = 0;
        foreach ($order_products as $record) {
            $list_order_relation = OrderProduct::query()->where("order_id", $record["order_id"])->where("product_id", "!=", $product_id)->get()->toArray();

            foreach ($list_order_relation as $other_item) {
                if (array_key_exists($other_item["product_id"], $map_relation_product)) {
                    $map_relation_product[$other_item["product_id"]] += $other_item["amount"];
                } else {
                    $map_relation_product[$other_item["product_id"]] = 0 + $other_item["amount"];
                }
                $count_total_score += $other_item["amount"];
            }
        }

        asort($map_relation_product);

        $response_recommend = [];
        foreach ($map_relation_product as $key => $value) {
            array_push($response_recommend, [
                "product_detail" => Product::find($key),
                "score" => $value / $count_total_score * 1.00
            ]);
        }
        return \ApiService::success($response_recommend);
    }

    public function store(Request $request)
    {
        $rules = [
            "name" => "required",
            "description" => "required"
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $product = new Product();
            $product->fill($request->all());
            $result = $product->save();
            if ($result) {
                return \ApiService::success($product);
            }
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_ADD_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_ADD_FAIL);
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product === null) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_UPDATE_FAIL);
        }

        $rules = [
            "name" => "required",
            "description" => "required"
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $product->fill($request->all());
            $result = $product->save();
            if ($result) {
                return \ApiService::success($product);
            }
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_ADD_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_ADD_FAIL);
        }
    }

    public function delete(Request $request, $id)
    {
        $user = Product::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_NOT_EXIST);
        }
        $user->delete();
        if ($user->trashed()) {
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_DELETE_FAIL);
    }


}
