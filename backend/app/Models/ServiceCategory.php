<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ServiceCategory
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_category
 * @property string|null $note
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|ServiceCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereParentCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|ServiceCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ServiceCategory withoutTrashed()
 * @mixin \Eloquent
 */
class ServiceCategory extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "service_categories";

    protected $fillable = [
        "name" , "parent_category", "note" , "user_id"
    ];
}
