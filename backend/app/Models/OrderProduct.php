<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use HasFactory , softDeletes;
    public $table ="order_products";
    protected $fillable  = [
        "order_id", "product_id", "product_price" , "amount", "note"
    ];


}
