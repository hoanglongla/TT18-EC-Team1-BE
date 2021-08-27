<?php

use App\Http\Controllers\Api\BookServiceController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\Api\TailController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ServiceCategoryController;
use App\Http\Controllers\ReportController;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Request\CategoryResource;
use App\Models\ServiceCategory;

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

Route::get("/hello_api/{username?}/{password?}", function ($username = "admin", $password = "admin") {
    return \ApiService::success([
        "username" => $username,
        "password" => $password
    ]);
});

Route::get("/", function () {return "Hello";});
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


    // Category Management


    Route::get("/product_category", [ProductCategoryController::class, 'index']);
    Route::post("/product_category", [ProductCategoryController::class, 'store']);
    Route::get("/product_category/{id}", [ProductCategoryController::class, 'show']);
    Route::post("/product_category/{id}/update", [ProductCategoryController::class, 'update']);
    Route::get("/product_category/{id}/delete", [ProductCategoryController::class, 'delete']);


    Route::get("/service_category", [ServiceCategoryController::class, 'index']);
    Route::post("/service_category", [ServiceCategoryController::class, 'store']);
    Route::get("/service_category/{id}", [ServiceCategoryController::class, 'show']);
    Route::post("/service_category/{id}/update", [ServiceCategoryController::class, 'update']);
    Route::get("/service_category/{id}/delete", [ServiceCategoryController::class, 'delete']);


    Route::get("/product", [ProductController::class, "index"]);
    Route::get("/product/{id}", [ProductController::class, "show"]);
    Route::post("/product", [ProductController::class, "store"]);
    Route::post("/product/{id}/update",  [ProductController::class, "update"]);
    Route::get("/product/{id}/delete",  [ProductController::class, "delete"]);

    Route::get("/service", [ServiceController::class, "index"]);
    Route::get("/service/{id}", [ServiceController::class, "show"]);
    Route::post("/service", [ServiceController::class, "store"]);
    Route::post("/service/{id}/update", [ServiceController::class, "update"]);
    Route::get( "/service/{id}/delete", [ServiceController::class, "delete"]);



    Route::get("/order", [OrderController::class, "index"]);
    Route::get("/order/{id}", [OrderController::class, "show"]);
    Route::post("/order", [OrderController::class, "store"]);
    Route::post("/order/{id}/update", [OrderController::class, "update"]);
    Route::get( "/order/{id}/delete", [OrderController::class, "delete"]);



    Route::get("/book_service", [BookServiceController::class, "index"]);
    Route::get("/book_service/{id}", [BookServiceController::class, "show"]);
    Route::post("/book_service", [BookServiceController::class, "store"]);
    Route::post("/book_service/{id}/update", [BookServiceController::class, "update"]);
    Route::get( "/book_service/{id}/delete", [BookServiceController::class, "delete"]);
    // End category
});

Route::group(['prefix' => "sub_admin", "middleware" => ["scopes:sub_admin", "auth:api"]], function () {
    Route::get("/", function () {
        return \ApiService::success("Sub Admin Index");
    });
    Route::post("/customer", [UserController::class, 'createCustomerUser']);

    Route::get("/user", [UserController::class, 'index']);
    Route::get("/user/{id}", [UserController::class, 'show']);
    Route::post("/user", [UserController::class, 'store']);
    Route::post("/user/{id}/update", [UserController::class, 'update']);
    Route::get("/user/{id}/delete", [UserController::class, 'destroy']);


    Route::post("/customer/{id}/update", [UserController::class, 'updateCustomerInfoFromStaff']);

    Route::post("/staff", [Usercontroller::class, 'createStaff']);

    //get list staff of tail, can be filter by role
    Route::get("/staff", [Usercontroller::class, 'getListStaff']);
    Route::post("/staff/{id}/update", [UserController::class, 'updateStaff']);
    Route::get("/staff/{id}/delete", [Usercontroller::class, 'deleteStaff']);


    Route::get("/order", [OrderController::class, "index"]);
    Route::get("/order/{id}", [OrderController::class, "show"]);
    Route::post("/order", [OrderController::class, "store"]);
    Route::post("/order/{id}/update", [OrderController::class, "update"]);
    Route::get( "/order/{id}/delete", [OrderController::class, "delete"]);


    Route::get("/book_service", [BookServiceController::class, "index"]);
    Route::get("/book_service/{id}", [BookServiceController::class, "show"]);
    Route::post("/book_service", [BookServiceController::class, "store"]);
    Route::post("/book_service/{id}/update", [BookServiceController::class, "update"]);
    Route::get( "/book_service/{id}/delete", [BookServiceController::class, "delete"]);

    Route::get("/reportByTail", [ReportController::class, "reportByTail"]);

});

Route::group([
    "prefix" => "c", "middleware" => ["scopes:customer", "auth:api"]
], function () {
    Route::get("/", function () {
        return \ApiService::success("Customer Index");
    });

    Route::post("/user/update", [UserController::class, 'updateCustomerInfo']);
    Route::get("/user/me", [UserController::class, 'getCurrentCustomerInfo']);
    Route::post("/user/change_password", [UserController::class, 'changePassword']);


    Route::get("/order", [OrderController::class, "index"]);
    Route::get("/order/{id}", [OrderController::class, "show"]);
    Route::post("/order", [OrderController::class, "store"]);
    Route::post("/order/{id}/update", [OrderController::class, "update"]);
    Route::get( "/order/{id}/delete", [OrderController::class, "delete"]);

    Route::get("/book_service", [BookServiceController::class, "index"]);
    Route::get("/book_service/{id}", [BookServiceController::class, "show"]);
    Route::post("/book_service", [BookServiceController::class, "store"]);
    Route::post("/book_service/{id}/update", [BookServiceController::class, "update"]);
    Route::get( "/book_service/{id}/delete", [BookServiceController::class, "delete"]);

});

Route::group(
    ["prefix" => "g"], function () {
    Route::get("/", function () {
        return \ApiService::success("General API");
        return (\App\Enums\ApiErrorCodeEnum::USER_NOT_EXIST);
    });
    Route::get("/user", [UserController::class, 'index']);
    Route::get("/user/{id}", [UserController::class, 'show']);

    Route::get("/tail", [TailController::class, 'index']);
    Route::get("/tail/{id}", [TailController::class, 'show']);
    //create customer account

    Route::post("/create_customer", [Usercontroller::class, 'createCustomerUser']);

    Route::get("/product_category", [ProductCategoryController::class, 'index']);
    Route::get("/product_category/{id}", [ProductCategoryController::class, 'show']);

    Route::get("service_category", [ServiceCategoryController::class, 'index']);
    Route::get("service_category/{id}", [ServiceCategoryController::class, 'show']);

    Route::get("/product", [ProductController::class, "index"]);
    Route::get("/product/{id}", [ProductController::class, "show"]);
    Route::get("/product_recommend", [ProductController::class, "product_recommend"]);

    Route::get("/service", [ServiceController::class, "index"]);
    Route::get("/service/{id}", [ServiceController::class, "show"]);

});
