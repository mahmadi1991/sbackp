<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailsModel extends Model
{
    use SoftDeletes;

    protected $table = 'details_model';

}

