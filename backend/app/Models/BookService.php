<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookService extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "book_services";
    protected $fillable = [
        "user_id", "tail_id", "staff_id", "service_id", "time_start", "time_end", "note", "status", "is_paid", "payment_id"
    ];
}
