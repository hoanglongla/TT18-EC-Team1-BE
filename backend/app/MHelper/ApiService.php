<?php


namespace App\MHelper;


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

    public function fail( $error_msg, $error_code=-1, $error_description=""): \Illuminate\Http\JsonResponse
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
