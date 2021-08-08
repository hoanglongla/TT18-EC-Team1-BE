<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentTransaction extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "payment_transactions";
    public $fillable  = [
        "payment_for_id", "is_order", "user_id", "payment_type", "status", "amount" , "note" , "payment_title", "payment_information_id", "is_refund" , "refund_detail_id"
    ];
}
