<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tail extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "tails";
    protected $fillable = [
        "name","phone", "address" ,"bio",  "district", "ward", "city" ,"country"
    ];

}
