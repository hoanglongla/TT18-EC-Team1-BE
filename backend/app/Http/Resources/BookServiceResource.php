<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookServiceResource extends JsonResource
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
            "staff_id" => $this->staff_id,
            "service_id" => $this->service_id,
            "tail_id" => $this->tail_id,
            "time_start" => $this->time_start,
            "time_end" => $this->time_end,
            "note" => $this->note,
            "status" => $this->status,
            "is_paid" => $this->is_paid,
            "payment_id" => $this->payment_id,
            "deleted_at" => $this->deleted_at,
            "created_at" => $this->created_at,
            "updated_at"=> $this->updated_at
        ];
    }
}
