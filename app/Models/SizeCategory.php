<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SizeCategory extends Model
{
    use SoftDeletes;

	protected $table = 'size_category';

}

