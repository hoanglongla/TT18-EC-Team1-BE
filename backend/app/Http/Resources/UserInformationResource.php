<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserInformationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "user_id"=> $this->user_id,
            "fullname"=>$this->fullname,
            "company" =>$this->company,
            "phone" => $this->phone,
            "address" =>$this->address,
            "bio" => $this->bio,
            "note" => $this->note,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at
        ];
    }
}
