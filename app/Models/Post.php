<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */

class Post extends Model
{
    // protected $primaryKey ='post_id';Переименновка для лары 
    // public $incrementing  = false ;Тк ID не число ап код страны например мы будем заполнять вручную
    // protected $keyType = 'string';Понятно тип ключа строка
    //protected $attributes = ['contect'=>'Lorem'];запролнение авто 
    // protected $timestamps=false; слежка за полями
    protected $fillable = ['title', 'content']; // Вайт лист чтоб понимал что можно менять а чо нет чтлб юзер не мог поменять роль на админа
    // protected $guarded = ['',''];Black list наоборт что филлбл ток защищеное свойство чтобы точно ни один гондон не получил  админку
    public function rubrick(){
        return $this->belongsTo(Rubrick::class);
    }

}


 