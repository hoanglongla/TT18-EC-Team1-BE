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

    public function fail( $error_msg, $error_code=-1, $error_data=""): \Illuminate\Http\JsonResponse
    {
        return \Response::json([
            'status' => false,
            'data' => [
                'error_code' => $error_code,
                'error_msg' => $error_msg,
                'error_data' => $error_data
            ]
        ]);
    }
}
