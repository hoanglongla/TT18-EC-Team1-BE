<?php


namespace App\MHelper;
use App\Enums\ApiErrorCodeEnum;


class ApiService
{
    public function __construct()
    {

    }

    //check permissino sub_admin (1) work at tail 1 only edit staff (2,3) at tail 1 
    //customer is ok or need to log edit record
    public function checkPermissionTailManager($request,$req_role , $req_tail_id) {
        $current_user = $request->user();
       
        if($current_user == null || $req_role == null){
            return false;
        }
        return $current_user->role < $req_role && $current_user->tail_id === $req_tail_id; 
    }
    public function hasTailManagerPermission($request, $lower_user){
        $current_user = $request->user();
        if($lower_user ==null){
            return false;
        }
        return $current_user->role < $lower_user->role && $current_user->tail_id === $lower_user->tail_id ;
    }
    public function success($data): \Illuminate\Http\JsonResponse
    {
        return \Response::json([
            'status' => true,
            'data' => $data
        ]);
    }
    

    /**
     * @param $error_code
     * @param string $error_description
     * @return \Illuminate\Http\JsonResponse
     */
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
