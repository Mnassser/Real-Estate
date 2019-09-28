<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;
	protected $fillable = array('title','type','notice','pictures','price','rooms','space','city_id');
	public function city()
	{
		return $this->belongsTo('App\Model\City', 'city_id');
	}

	public function messages()
	{
		return $this->hasMany('Message');
	}
	public function category()
	{
		return $this->belongsTo('App\Model\Category', 'category_id');
	}


}