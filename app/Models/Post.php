<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $someProperty;
    protected $table = 'posts'; //нужно указывать название таблицы для модели даже если она создавалась с миграцией (так приняито)
    protected $fillable = ['title', 'post_content', 'likes', 'is_published','image'];
}
