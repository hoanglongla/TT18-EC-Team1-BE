<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    public $table  ="orders";
    protected $fillable =[
        'user_id', 'tail_id', 'staff_process_id', 'note', 'status', 'is_paid', 'payment_id' ,'delivery_status'
    ];

    public function order_products() {
        return $this->hasMany("App\Models\OrderProduct", "order_id", "id");
    }
}
