<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            "price" =>  $this->price,
            "price_discount" => $this->price_discount,
            "description"=>$this->description,
            "stock" => $this->stock,
            "amount" => $this->amount,
            "unit" => $this->unit,
            "products_categories_id" => $this->products_categories_id
        ];
    }
}
