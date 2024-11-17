<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $post_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostsTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostsTag extends Model
{
    use HasFactory;
    protected $fillable =['post_id','tag_id'];
}
