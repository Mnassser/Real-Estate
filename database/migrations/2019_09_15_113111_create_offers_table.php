<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('type');
			$table->string('notice');
			$table->string('pictures');
			$table->bigInteger('salary');
			$table->integer('rooms');
			$table->integer('space');
			$table->integer('city_id');
			$table->integer('client_id');
		});
	}

	public function down()
	{
		Schema::drop('offers');
	}
}