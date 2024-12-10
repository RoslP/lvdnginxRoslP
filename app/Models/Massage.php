<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Massage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Massage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Massage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Massage whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Massage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Massage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Massage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Massage extends Model
{
    use HasFactory;
    protected $guarded = false;
}
