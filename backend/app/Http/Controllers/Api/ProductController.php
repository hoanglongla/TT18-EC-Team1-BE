<?php

namespace App\Http\Controllers\API;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;
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
        if($user->trashed()){
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_DELETE_FAIL);
    }



}
