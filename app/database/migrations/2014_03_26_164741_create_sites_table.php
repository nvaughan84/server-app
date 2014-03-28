<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
{
  Schema::create('site', function($table)
    {
        $table->increments('id');
        $table->string('domain')->unique();
        $table->integer('server_id');
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
		Schema::drop('site');
	}

}
