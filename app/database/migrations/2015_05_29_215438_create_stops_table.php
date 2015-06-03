<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stops', function($table)
		{
		    $table->increments('id');
		    $table->integer('ship_id')->unsigned();
		    $table->timestamp('arrival')->nullable();
		    $table->timestamp('departure')->nullable();
		    $table->timestamps();
		    $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('stops');
	}

}
