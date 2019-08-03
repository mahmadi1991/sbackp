<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DishdashaModel extends Model
{
    use SoftDeletes;

	protected $table = 'dishdasha_model';

}

