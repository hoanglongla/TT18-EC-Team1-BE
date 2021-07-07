<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "products";
    protected $fillable  = [
        "name", "price" ,"price_discount", "description", "stock", "amount", "unit", "products_categories_id"
    ];

}
