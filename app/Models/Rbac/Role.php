<?php

namespace App\Models\Rbac;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $table = 'role';


    public function users()
    {
        return $this->belongsToMany('App\\Models\\Rbac\\User' , 'user_role' , 'role_id')->withTimestamps();
    }



    public function gates()
    {
        return $this->belongsToMany('App\\Models\\Rbac\\Gate' , 'role_gate' , 'role_id')->withTimestamps();
    }

    public function giveGateTo(Gate $gate)
    {
        return $this->gates()->save($gate);
    }
}
