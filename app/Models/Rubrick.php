<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Builder;

/**
 * Clas Rubric 
 * @package App
 * @mixin Builer
 */

class Rubrick extends Model
{
    use HasFactory;
    // $rubric = Rubic::find(1);
    // $rubric->postПервый аргумент, передаваемый hasOneметоду, — это имя связанного класса модели. Как только отношение определено, мы можем получить связанную запись, используя динамические свойства Eloquent. Динамические свойства позволяют вам обращаться к методам отношений, как если бы они были свойствами, определенными в модели:
//    Eloquent определяет внешний ключ отношения на основе имени родительской модели. В этом случае Phoneавтоматически предполагается, что модель имеет user_idвнешний ключ. Если вы хотите переопределить это соглашение, вы можете передать второй аргумент hasOneметоду:
// hasMany/ hasOne отношение рубрик к одному - ко многим в инверсии у оботх belongstTo
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
