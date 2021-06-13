<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
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
                    'scope' => '',
                ],
            ]);
            $record_user = DB::table('users')->where('username', '=', $request->username)->first();

            $res = json_decode((string)$http_post->getBody(), true);
            $res["user_record"] = User::find($record_user->id)->first();
            return \ApiService::success($res);
        } catch (ClientException $e) {
            $err_response = $e->getResponse();
            //$responseBodyAsString = $err_response->getBody()->getContents();
            $res = json_decode((string)$err_response->getBody(), true);
            return \ApiService::fail("Login error", -1, $res);

        }

    }
}
