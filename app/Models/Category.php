<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->hasMany(Post::class,'category_id','id');//первое модель какого класса, второе какой столбец считается внешним ключем в таблице Post, третье текущая колонка в текущей модели по которой идёт привязка
    }
}
