<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 191);
			$table->string('type', 191);
			$table->string('notice', 191);
			$table->string('pictures', 191);
			$table->bigInteger('salary');
			$table->integer('rooms');
			$table->integer('space');
			$table->integer('city_id');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}