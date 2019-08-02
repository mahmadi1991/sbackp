<?php

namespace App\Models\Rbac;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gate extends Model
{
    use SoftDeletes;

    protected $table = 'gate';

    public function roles()
    {
        return $this->belongsToMany(Role::class , 'role_gate' , 'gate_id');
//        return $this->belongsToMany(Role::class , 'role_gate' , 'gate_id')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo('App\\Models\\Rbac\\Category' , 'category');
    }

}
