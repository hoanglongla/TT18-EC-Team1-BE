<?php

namespace App\Http\Controllers\Api;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    //

    public function index(Request $request)
    {
        $users = User::query();
        $per_page = $request->per_page ?? 10;
        if ($request->has("is_customer")) {
            $users->where("is_customer", $request->is_customer);
        }
        $users = $users->paginate($per_page);
        return \ApiService::success(new ModelCollection($users));
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_NOT_EXIST, "User không tồn tại");
        }
        return \ApiService::success(new UserResource($user));
    }

    public function store(Request $request)
    {
        $rules = [
            "username" => "required|unique:users|min:4|max:100",
            "email" => "required|email",
            "password" => "required",
            "is_customer" => "required",
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_FAIL_VALIDATION, $validator->errors()->toArray());
        }
        $user = new User();
        $user->fill($request->all());
        $user->save();
        if ($user->id === null) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_ADD_FAIL);
        }
        return \ApiService::success(new UserResource($user));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            "username" => "required|unique:users|min:4|max:100",
            "email" => "required|email",
            "password" => "required",
            "is_customer" => "required",
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_FAIL_VALIDATION, $validator->errors()->toArray());
        }
        $user = User::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_NOT_EXIST);
        }
        try {
            $result = $user->fill($request->all());
            if ($result) {
                return \ApiService::success($user);
            }
            return \ApiService::fail(ApiErrorCodeEnum::USER_UPDATE_FAIL);
        } catch (\Exception $ex) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_UPDATE_FAIL);
        }
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::USER_NOT_EXIST);
        }
        $user->delete();
        if($user->trashed()){
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::USER_DELETE_FAIL);
    }

    public function createCustomerUser(Request $request)
    {

    }

    public function createSubAdmin()
    {

    }

    public function createStaff(Request $request)
    {

    }

    public function changeStaffRole(Request $request)
    {

    }

}
