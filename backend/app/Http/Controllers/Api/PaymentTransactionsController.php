<?php

namespace App\Http\Controllers\Api;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\PaymentTransactionsResource;
use App\Models\PaymentTransaction;
use App\Models\User;
use Faker\Provider\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PaymentTransactionsController extends Controller
{

    public function index()
    {
        //
        $payment_transactions = PaymentTransaction::query();
        $per_page = $request->per_page ?? 10;
        if($request->has("user_id")){
            $payment_transactions = $payment_transactions->where("user_id" , $request->user_id);
        }
        $payment_transactions = $payment_transactions->paginate($per_page);
        return \ApiService::success(new ModelCollection($payment_transactions));
    }

    public function show($id){
        $payment= PaymentTransaction::find($id);
        if($payment ===null){
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_NOT_EXIST, "Payment không tồn tại");
        }
        return \ApiService::success(new PaymentTransaction($payment));
    }


    public function store(Request $request)
    {
        $rules = [];
        $validator = \Validator::make($request->all() ,$rules);
        if($validator->fails())
        {
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_FAIL_VALIDATION, $validator->errors()->toArray());
        }
        $payment = new PaymentTransaction();
        $payment->fill($request->all());
        $payment->save();
        if($payment->id ===null) {
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_ADD_FAIL);
        }
        return \ApiService::success(new PaymentTransactionsResource($payment));
    }


    public function update(Request $request, $id)
    {
        $rules = [];
        $validator = \Validator::make($request->all() ,$rules);
        if($validator->fails())
        {
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_FAIL_VALIDATION, $validator->errors()->toArray());
        }
        $payment = PaymentTransaction::find($id);
        if($payment ==null){
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_NOT_EXIST);
        }
        try{
            $payment->fill($request->all());
            $result =  $payment->save();
            if(result) {
                return \ApiService::success($payment);
            }
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_UPDATE_FAIL);
        }
        catch (\Exception $ex){
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_UPDATE_FAIL);
        }
    }


    public function destroy($id)
    {

        $paymentTransactions = PaymentTransaction::find($id);
        if ($paymentTransactions === null) {
            return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_NOT_EXIST);
        }
        $paymentTransactions->delete();
        if($paymentTransactions->trashed()){
            return \ApiService::success("deleted");
        }
        return \ApiService::fail(ApiErrorCodeEnum::PAYMENT_DELETE_FAIL);
    }
}
