<?php

use App\Http\Controllers\Api\TailController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// -- Begin test API

Route::get("/start/success", function () {
    return \ApiService::success("ok");
});

Route::get("/start/fail", function () {
    return \ApiService::fail(\App\Enums\ApiErrorCodeEnum::USER_NOT_EXIST);
});

// -- End test API

Route::get("/login", [AuthController::class, 'login']);

Route::group(['prefix' => "admin", "middleware" => ['scopes:admin', 'auth:api']], function () {
    Route::get("/", function () {
        return \ApiService::success("Admin permission ok");
    });

    // -- Tail

    // Add new tail
    Route::get("/tail", [TailController::class, 'index']);
    Route::get("/tail/{id}", [TailController::class, 'show']);
    Route::post("/tail", [TailController::class, 'store']);
    Route::post("/tail/{id}/update", [TailController::class, 'update']);
    Route::get("/tail/{id}/delete", [TailController::class, 'destroy']);
    // -- End Tail

    // Add new user
    Route::get("/user", [UserController::class, 'index']);
    Route::get("/user/{id}", [UserController::class, 'show']);
    Route::post("/user", [UserController::class, 'store']);
    Route::post("/user/{id}/update", [UserController::class, 'update']);
    Route::get("/user/{id}/delete", [UserController::class, 'destroy']);
    // -- End new user



});




Route::group(["prefix" => "g"], function () {
    Route::get("/", function () {
        return \ApiService::success("General API");
        return (\App\Enums\ApiErrorCodeEnum::USER_NOT_EXIST);
    });
    Route::get("/user", [UserController::class, 'index']);
    Route::get("/user/{id}", [UserController::class, 'show']);

    Route::get("/tail", [TailController::class, 'index']);
    Route::get("/tail/{id}", [TailController::class, 'show']);

    //get all tail info


});


