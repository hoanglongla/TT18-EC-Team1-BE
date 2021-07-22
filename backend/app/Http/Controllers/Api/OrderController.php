<?php

namespace App\Http\Controllers\Api;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderController extends Controller
{
    //

    public function index(Request  $request){
        $query = Order::query();
        $per_page = $request->per_page ?? 10;
        $query = $query->paginate($per_page);
        return \ApiService::success(new ModelCollection($query));
    }
    public function show(Request $request, $id)
    {
        $service = Order::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_NOT_EXIST);
        }
        return \ApiService::success(new  OrderResource($service));
    }
    public function store(Request $request)
    {
        $rules = [
            "user_id"  => "required"
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $book_service = new Order();
            $book_service->fill($request->all());
            $result = $book_service->save();
            if ($result) {
                return \ApiService::success($book_service);
            }
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_ADD_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_ADD_FAIL);
        }
    }

    public function update(Request $request, $id)
    {
        $service = Order::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_NOT_EXIST);
        }

        $rules = [
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $service->fill($request->all());
            $result = $service->save();
            if ($result) {
                return \ApiService::success($service);
            }
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_UPDATE_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_UPDATE_FAIL);
        }
    }
    public function delete(Request $request, $id)
    {
        $user = Order::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::ORDER_NOT_EXIST);
        }
        $user->delete();
        if($user->trashed()){
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::ORDER_DELETE_FAIL);
    }
}
