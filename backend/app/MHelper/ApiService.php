<?php


namespace App\MHelper;
use App\Enums\ApiErrorCodeEnum;


class ApiService
{
    public function __construct()
    {

    }

    public function success($data): \Illuminate\Http\JsonResponse
    {
        return \Response::json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function fail( $error_code, $error_description=""): \Illuminate\Http\JsonResponse
    {
        return \Response::json([
            'status' => false,
            'err' => [
                'code' => $error_code,
                'message' => ApiErrorCodeEnum::getDescription($error_code),
                'description' => $error_description
            ],
            'data' =>[]
        ]);
    }
    public function failWithMsg( $error_code, $error_msg,  $error_description=""): \Illuminate\Http\JsonResponse
    {
        return \Response::json([
            'status' => false,
            'err' => [
                'code' => $error_code,
                'message' => $error_msg,
                'description' => $error_description
            ],
            'data' =>[]
        ]);
    }
}
