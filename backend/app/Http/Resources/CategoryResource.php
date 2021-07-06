<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            "parent_category" => $this->parent_category,
            "note" => $this->note, 
            "user_id" => $this->user_id,
            "deleted_at" => $this->deleted_at,
            "created_at" => $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
