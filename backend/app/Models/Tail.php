<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Tail
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $bio
 * @property string|null $district
 * @property string|null $ward
 * @property string|null $city
 * @property string|null $country
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tail newQuery()
 * @method static \Illuminate\Database\Query\Builder|Tail onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Tail query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tail whereWard($value)
 * @method static \Illuminate\Database\Query\Builder|Tail withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Tail withoutTrashed()
 * @mixin \Eloquent
 */
class Tail extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "tails";
    protected $fillable = [
        "name","phone", "address" ,"bio",  "district", "ward", "city" ,"country"
    ];

}
