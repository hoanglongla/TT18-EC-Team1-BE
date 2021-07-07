<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "services";
    protected $fillable = [
        "name", "price", "price_discount", "description", "time_estimate", "can_book_online", "sex_type", "services_categories_id" //'services_categories_id'
    ];
}

