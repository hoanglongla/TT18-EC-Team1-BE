<?php

namespace App\Http\Controllers\API;


use App\Enums\UserRole;
use App\Enums\ApiErrorCodeEnum;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Resources\ModelCollection;

use App\Http\Resources\CategoryResource;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $product_category = ProductCategory::query();
        $per_page = $request->per_page ?? 10;
        if($request->has('parent_category')){
            $product_category = $product_category->where("parent_category" ,$request->parent_category); 
        }
        $product_category = $product_category->paginate($per_page);
        return \ApiService::success(new ModelCollection($product_category));
    }


    public function show($id)
    {
        //
        $result   =ProductCategory::find($id);
        if($result ===null){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_NOT_EXIST);
        }        
        return \ApiService::success(new CategoryResource($result));
    }

  
}
