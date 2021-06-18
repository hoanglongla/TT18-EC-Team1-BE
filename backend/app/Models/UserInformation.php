<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\UserInformation
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $tail_id
 * @property string $fullname
 * @property string|null $company
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $bio
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation newQuery()
 * @method static \Illuminate\Database\Query\Builder|UserInformation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereTailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInformation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|UserInformation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UserInformation withoutTrashed()
 * @mixin \Eloquent
 */
class UserInformation extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "user_informations";
    public $timestamps = true;

    protected $fillable = [
        'tail_id',
        'fullname',
        'company',
        'phone',
        'address',
        'bio',
        'note'
    ];

}
