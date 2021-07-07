<?php

namespace App\Http\Controllers\API;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        //
        $query = Product::query();
        $per_page = $request->per_page ?? 10;
        if ($request->has("products_categories_id")) {
            $query = $query->where("products_categories_id");
        }
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

}
