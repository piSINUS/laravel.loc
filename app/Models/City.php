<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class City
 * @package App
 * @mixin Builder
 */
class City extends Model
{
    use HasFactory;
    protected $table ='city';
}
