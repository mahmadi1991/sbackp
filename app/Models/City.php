<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
	protected $table = 'city';


	public $timestamps = false;



	public function scopeProvinces($query)
	{
		return $query->whereNull('parentId');
	}



	public function scopeCities($query)
	{
		return $query->where('type', 'NEW');
	}



	public function city()
	{
		return $this->hasMany('\App\Models\City','parentId')->where('type','NEW');
	}

	public function province()
	{
		return $this->belongsTo('\App\Models\City', 'parentId', 'id');
	}
}
