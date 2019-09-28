<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('message');
			$table->integer('client_id');
			$table->integer('product_id');
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}