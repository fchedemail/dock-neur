<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('containers', function($table)
		{
		    $table->increments('id');
		    $table->integer('capacity')->nullable();
		    $table->integer('user_id')->unsigned();
		    $table->integer('ship_id')->unsigned()->nullable();
		    $table->integer('harbor_id')->unsigned()->nullable();
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
		Schema::dropIfExists('containers');
	}

}
