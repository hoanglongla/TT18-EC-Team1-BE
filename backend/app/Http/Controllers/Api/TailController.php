<?php

namespace App\Http\Controllers\API;

use App\Enums\ApiErrorCodeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModelCollection;
use App\Http\Resources\TailResource;
use App\Models\Tail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tails  = Tail::query();
        $per_page = $request->per_page ?? 10;
        $tails = $tails->paginate($per_page);
        return \ApiService::success(new ModelCollection($tails));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules  = [
            "name"=> "required|min:3|max:255"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_FAIL_VALIDATION, $validator->errors()->toArray());
        }
        $tail = new Tail();
        $tail->fill( $request->all());
        $tail->save();
        if($tail->id === null){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_ADD_FAIL);
        }
        return \ApiService::success($tail);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tail  $tail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tail = Tail::find($id);
        if($tail ===null){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_NOT_FOUND);
        }
        return \ApiService::success(new TailResource($tail));
    }

    
    public function update(Request $request, $id)
    {//

        $rules  = [
            "name"=> "required|min:3|max:255"
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_FAIL_VALIDATION, $validator->errors()->toArray());
        }
        $tail = Tail::find($id);
        if($tail === null){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_NOT_FOUND, $validator->errors()->toArray());
        }
        try{
            $rslt = $tail->update($request->all());
            if($rslt) {
                return \ApiService::success($tail);
            }
        }catch (\Exception $ex){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_UPDATE_FAIL, $ex);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tail  $tail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tail = Tail::find($id);
        if($tail===null){
            return \ApiService::fail(ApiErrorCodeEnum::TAIL_NOT_FOUND);
        }
        $tail->delete();
        if($tail->trashed()){
            return \ApiService::success("delete success");
        }
        return \ApiService::fail(ApiErrorCodeEnum::TAIL_DELETE_FAIL);
    }
}
