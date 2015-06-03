<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movements', function($table)
		{
		    $table->increments('id');
		    $table->timestamp('moved_at')->nullable();
		    $table->integer('stop_id')->unsigned();
		    $table->integer('container_id')->unsigned();
		    $table->integer('ship_id')->unsigned();
		    $table->boolean('is_loading');
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
		Schema::dropIfExists('movements');
	}

}
