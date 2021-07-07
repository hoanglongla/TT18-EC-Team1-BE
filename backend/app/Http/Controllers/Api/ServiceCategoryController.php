<?php
namespace App\Http\Controllers\API;

use App\Enums\UserRole;
use App\Enums\ApiErrorCodeEnum;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Resources\ModelCollection;

use App\Http\Resources\CategoryResource;


class ServiceCategoryController extends Controller
{
    public function index(Request $request)
    {
        //
        $product_category = ServiceCategory::query();
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
        $result   = ServiceCategory::find($id);
        if($result ===null){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_NOT_EXIST);
        }
        return \ApiService::success(new CategoryResource($result));
    }

    public function store(Request $request)
    {
        $rules = [
            "name" => "required",
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_FAIL_VALIDATION  , $validator->errors());
        }

        try {
            $category = new ServiceCategory();
            $category->fill($request->all() );
            $result = $category->save();
            if($result){
                return \ApiService::success($category);
            }
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_ADD_FAIL);
        }
        catch (\Exception $ex ){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_ADD_FAIL);
        }
    }

    public function update(Request $request, $id)
    {
        $category = ServiceCategory::find($id);
        if($category ===null){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_NOT_EXIST);
        }

        $rules = [
            "name" => "required",
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_FAIL_VALIDATION  , $validator->errors());
        }

        try {
            $category->fill($request->all()) ;
            $result = $category->save();
            if($result){
                return \ApiService::success($category);
            }
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_UPDATE_FAIL);
        }
        catch (\Exception $ex ){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_UPDATE_FAIL);
        }
    }


    public  function delete(Request $request, $id){
        $category = ServiceCategory::find($id);
        if($category ===null){
            return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_NOT_EXIST);
        }
        $category->delete();
        if($category->trashed())
        {
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::CATEGORY_DELETE_FAIL);
    }
}
