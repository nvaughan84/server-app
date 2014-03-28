<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
{
  Schema::create('server', function($table)
    {
        $table->increments('id');
        $table->string('name');
        $table->string('ip');
        $table->timestamps();
    });
}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('server');
	}

}
