<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TailResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "phone" => $this->phone,
            "address" => $this->address,
            "bio" => $this->bio,
            "district" => $this->district,
            "ward" => $this->ward,
            "city" => $this->city,
            "country" => $this->country,
            "deleted_at" => $this->deleted_at,
            "created_at" => $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }

}
