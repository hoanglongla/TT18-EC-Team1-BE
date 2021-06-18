<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->failed()) {
            return \ApiService::fail("login error", 1, $validator->errors()->toArray());
        }
        $user_record= User::where("username", $request->username)->first();
        if($user_record === null){
            return \ApiService::fail("Invalid username", 13001, "Không tìm thấy tên tài khoản");
        }

        //grant permission
        $user_role = ["0"=> "admin", "1"=> "sub_admin", "2"=> "sale_staff", "3" => "service_staff", "10" => "customer"];
        $scope_permission = $user_role[$user_record->role];

        $client_row = DB::table('oauth_clients')->find(2);
        $client_secret = $client_row->secret;



        $http = new \GuzzleHttp\Client;

        try {
            $http_post = $http->post(config('app.url'). '/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => $client_secret,
                    'username' => $request->username,
                    'password' => $request->password,
                    'scope' => $scope_permission,
                ],
            ]);

            $res = json_decode((string)$http_post->getBody(), true);
            $res["user_record"] = $user_record;
            $res["scope"] = $scope_permission;
            return \ApiService::success($res);
        } catch (ClientException $e) {
            $err_response = $e->getResponse();
            //$responseBodyAsString = $err_response->getBody()->getContents();
            $res = json_decode((string)$err_response->getBody(), true);
            return \ApiService::fail("Kiểm tra lại thông tin tài khoản hoặc mật khẩu", 13001, "invalid_login");
        }

    }

    public function registerTail(Request $request){

    }
}
