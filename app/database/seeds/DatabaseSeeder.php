<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('SiteTableSeeder');
		//$this->call('ServerTableSeeder');
	}

}

class ServerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('server')->delete();

        DB::table('server')->insert(
        	array(
        		array('name' => 'Titan'), 
        		array('name' => 'Hyperion'),
        		array('name' => 'Atlas'),
        		array('name' => 'Enceladus'),
        		array('name' => 'Corporate')
        		)
        	);
    }

}

class SiteTableSeeder extends Seeder {

    public function run()
    {
        DB::table('site')->delete();

        DB::table('site')->insert(
        	array(
        		array('domain' => 'www.akw-ltd.co.uk'), 
        		array('domain' => 'www.thebluecube.co.uk')
        		)
        	);
    }

}