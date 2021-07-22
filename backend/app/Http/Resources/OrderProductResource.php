<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderProductResource extends JsonResource
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
            "order_id" => $this->order_id,
            "product_id"=> $this->product_id,
            "product_price" => $this->product_price,
            "note"=> $this->note,
            "deleted_at" => $this->deleted_at,
            "created_at" => $this->created_at,
            "updated_at"=> $this->updated_at

        ];
    }
}
