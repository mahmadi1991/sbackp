<?php

namespace App\Models\Rbac;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $table = 'category';

    public function gates()
    {
        return $this->hasMany('App\\Models\\Rbac\\Gate' , 'category');
    }
}
