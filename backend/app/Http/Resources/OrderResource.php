<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "user_id"  => $this->user_id,
            "tail_id" => $this->tail_id,
            "staff_process_id" => $this->staff_process_id,
            "note" => $this->note,
            "status" => $this->status,
            "is_paid" => $this->is_paid,
            "payment_id"=> $this->payment_id,
            "delivery_status"=> $this->delivery_status,
            "order_product" => $this->order_products,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at
        ];
    }
}
