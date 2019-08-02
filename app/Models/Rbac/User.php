<?php

namespace App\Models\Rbac;

use App\Http\Middleware\TrimStrings;
use App\Models\Package;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function packages()
    {
        return $this->hasMany('App\\Models\\Package' , 'userId');
    }
    public function changes()
    {
        return $this->hasMany('App\\Models\\Change');
    }
    public function roles()
    {
        return $this->belongsToMany('App\\Models\\Rbac\\Role' , 'user_role' , 'user_id')->withTimestamps();
    }

    public function department()
    {

        return $this->belongsTo('App\\Models\\Department' , 'cityId');

    }


    public function hasRole($role)
    {

        if (is_string($role)) {

            return $this->roles->contains('name', $role);
        }

        //return !! $role->intersect($this->roles)->count();


        foreach ($role as $item) {
            if ($this->hasRole($item->name)) {
                return true;
            }
        }
        return false;
    }


    public function hasPackage()
    {

        if ($this->userType == 'panel')
    {

        return  $this->packages()->where('owner','=','0')->get();

    } else if ($this->userType == 'system')

    {
        $fatherId=$this->fatherId;

        $user=$this->find($fatherId);

        return  $user->packages()->where('owner','=','0')->get();

    }
        /*        foreach ($this->roles as $item) {
                    if ($item->name == 'superAdmin') {
                        return true;
                    }
                }
                return false;*/
    }



    public function assignRole($role)
    {

        $this->roles()->sync(Role::whereName($role)->firstOrFail());
    }


    public function hasGate($packageId)
    {
        if(is_string($packageId)){

            return $this->packages->contains('id' , $packageId);
        }

        //return !! $role->intersect($this->roles)->count();

        foreach($packageId as $item)
        {
            if ($this->hasPackage($item->id))
            {
                return true;
            }
        }
        return false;

    }


    public function isAdmin(){
        foreach ($this->roles as $role) {
            if($role->name == 'manager'){
                return true;
            }
            return false;
        }
    }

//    public function package()
//    {
//        return $this->hasMany('App\\Models\\Menu\\Package', 'userId');
//
//    }





}
