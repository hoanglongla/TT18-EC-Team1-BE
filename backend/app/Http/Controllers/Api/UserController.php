<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request) {
        $users= User::query();
        $per_page = $request->per_page ?? 10;
        if($request->has("is_customer")){
            $users->where("is_customer" , $request->is_customer);
        }
        $users = $users->paginate($per_page);
        //return UserResource::collection($users);
        return \ApiService::success(new UserCollection($users));
    }
    public function show($id ){
        $user = User::find($id);
        if($user === null){
            return \ApiService::fail("user_not_exist", 140001, "User không tồn tại");
        }
        return \ApiService::success( new UserResource($user));
    }
}
