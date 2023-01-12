<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @package App
 * @mixin Builder
 */

class Country extends Model
{
    use HasFactory;
    protected $table ='country';
    protected $ptimaryKey ='Code';
    public $incrementing = false ;
    protected $keyType = 'string';

}
