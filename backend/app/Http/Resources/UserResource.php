<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "id"=> $this->id,
            "username"=> $this->username,
            "email" => $this->email,
            "role" => $this->role,
            "is_customer" => $this->is_customer,
            "tail_id" => $this->tail_id,
            "user_information" => $this->user_information,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,

        ];
    }
}
