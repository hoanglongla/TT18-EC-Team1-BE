<?php

namespace App\Http\Controllers\Api;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookServiceResource;
use App\Http\Resources\ModelCollection;
use App\Models\BookService;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BookServiceController extends Controller
{
    //
    public function index(Request  $request){
        $query = BookService::query();
        $per_page = $request->per_page ?? 10;
        $query = $query->paginate($per_page);
        return \ApiService::success(new ModelCollection($query));
    }
    public function show(Request $request, $id)
    {
        $service = BookService::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_NOT_EXIST);
        }
        return \ApiService::success(new  BookServiceResource($service));
    }
    public function store(Request $request)
    {
        $rules = [
            "user_id"  => "required",
            "service_id" => "required",
            "time_start" => "required",
            "time_end" =>  "required",
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $book_service = new BookService();
            $book_service->fill($request->all());
            $result = $book_service->save();
            if ($result) {
                return \ApiService::success($book_service);
            }
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_ADD_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_ADD_FAIL);
        }
    }

    public function update(Request $request, $id)
    {
        $service = BookService::find($id);
        if ($service === null) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_NOT_EXIST);
        }

        $rules = [
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_FAIL_VALIDATION, $validator->errors());
        }
        try {
            $service->fill($request->all());
            $result = $service->save();
            if ($result) {
                return \ApiService::success($service);
            }
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_UPDATE_FAIL);
        } catch (\Exception $exception) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_UPDATE_FAIL);
        }
    }
    public function delete(Request $request, $id)
    {
        $user = BookService::find($id);
        if ($user === null) {
            return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_NOT_EXIST);
        }
        $user->delete();
        if($user->trashed()){
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::BOOK_SERVICE_DELETE_FAIL);
    }

}
