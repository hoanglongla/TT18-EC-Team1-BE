<?php

namespace App\Http\Controllers\API;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\ServiceResource;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        //
        $query = Service::query();
        $per_page = $request->per_page ?? 10;
        if ($request->has("services_categories_id")) {
            $query = $query->where("services_categories_id", $request->services_categories_id);
        }
        $query = $query->paginate($per_page);
        return \ApiService::success(new ModelCollection($query));
    }

    public function show(Request $request, $id)
    {
        $service = Service::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_NOT_EXIST);
        }
        return \ApiService::success(new  ServiceResource($service));
    }

    public function store(Request $request)
    {
        $rules = [
            "name" => "required",
            "description" => "required"
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $service = new Service();
            $service->fill($request->all());
            $result = $service->save();
            if ($result) {
                return \ApiService::success($service);
            }
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_ADD_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_ADD_FAIL);
        }
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_NOT_EXIST);
        }

        $rules = [
            "name" => "required",
            "description" => "required"
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $service->fill($request->all());
            $result = $service->save();
            if ($result) {
                return \ApiService::success($service);
            }
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_UPDATE_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_UPDATE_FAIL);
        }
    }
    public function delete(Request $request, $id)
    {
        $user = Service::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::SERVICE_NOT_EXIST);
        }
        $user->delete();
        if($user->trashed()){
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::SERVICE_DELETE_FAIL);
    }

}
