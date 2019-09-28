<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Order extends Model {

	protected $table = 'orders';
	public $timestamps = true;
	protected $fillable = array('title','type','notice','phone','price','rooms','space','city_id','client_id','category_id');

	public function city()
	{
		return $this->belongsTo('App\Model\City', 'city_id');
	}

	public function client()
	{
		return $this->belongsTo('App\Model\Client', 'client_id');
	}
	public function category()
	{
		return $this->belongsTo('App\Model\Category', 'category_id');
	}

}