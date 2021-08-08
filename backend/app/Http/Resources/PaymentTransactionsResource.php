<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentTransactionsResource extends JsonResource
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
            "user_id" => $this->user_id,
            "payment_for_id"=> $this->payment_for_id,
            "is_order" => $this->is_order,
            "payment_type" => $this->payment_type,
            "status" => $this->status,
            "amount" => $this->amount,
            "note"=> $this->note,
            "payment_title"=> $this->payment_title,
            "payment_information_id" => $this->payment_information_id,
            "is_refund" => $this->is_refund,
            "refund_detail_id" => $this->refund_detail_id
        ];
    }
}
