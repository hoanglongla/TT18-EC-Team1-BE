<?php

namespace App\Http\Controllers\API;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\ServiceResource;
use App\Models\Product;
use App\Models\Service;
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
            $query = $query->where("services_categories_id");
        }
        return \ApiService::success(new ModelCollection($query));
    }

    public function show(Request $request, $id)
    {
        $service = Service::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::PRODUCT_NOT_EXIST);
        }
        return \ApiService::success(new  ServiceResource($service));
    }
}
