<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            "price" => $this->price,
            "price_discount" => $this->price_discount,
            "description" => $this->description,
            "picture" => $this->picture,
            "time_estimate"=> $this->time_estimate,
            "can_book_online" => $this->can_book_online,
            "sex_type" => $this->sex_type,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
