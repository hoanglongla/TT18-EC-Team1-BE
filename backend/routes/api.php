<?php
define("APP_URL", "http://econail.localhost");

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

Route::get("/start/success", function (){
    return \ApiService::success("ok");
});

Route::get("/start/fail", function (){
    return \ApiService::fail("Banj can dang nhap", 1, []);
});



Route::get("/login", function (Request $request){
    $host = App::environment('APP_URL');
    $validator = \Validator::make($request->all(), [
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);
    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => $validator->errors()->first(),
            'errors' => $validator->errors()->toArray(),
        ]);
    }
    $client_row = DB::table('oauth_clients')->find(2);
    $client_secret  =  $client_row->secret;

    $http = new GuzzleHttp\Client;

    try {
        $http_post = $http->post(APP_URL.'/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => $client_secret,
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '',
            ],
        ]);
        $record_user =  DB::table('users')->where('email', '=', $request->email)->first();

        $res = json_decode((string) $http_post->getBody(), true);
        $res["user_record"] = User::findOrFail($record_user->id);
        return \ApiService::success($res);

    }catch (GuzzleHttp\Exception\ClientException $e) {
        $err_response  = $e->getResponse();
        $responseBodyAsString = $err_response->getBody()->getContents();
        return  json_decode((string) $err_response->getBody(), true);
    }
});

