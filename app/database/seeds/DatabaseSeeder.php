<?php

use \Carbon\Carbon;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('HarborTableSeeder');
		$this->call('CompanyTableSeeder');
		$this->call('ShipTableSeeder');
		$this->call('StopTableSeeder');
		$this->call('MovementTableSeeder');
		$this->call('ContainerTableSeeder');

        $this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        		'username' => 'Apple',
        		'password' => 'apple',
        		'email' => 'apple@apple.com',
        		'type' => User::TYPE_COMPANY,
        	));
        User::create(array(
        		'username' => 'jgall',
        		'password' => 'port',
        		'firstname' => 'Jean',
        		'surname' => 'Gall',
        		'email' => 'jgall@port.com',
        		'type' => User::TYPE_HARBOR,
        	));
        User::create(array(
        		'username' => 'msmith',
        		'password' => 'client',
        		'firstname' => 'Michael',
        		'surname' => 'Smith',
        		'email' => 'msmith@port.com',
        		'type' => User::TYPE_CLIENT,
        	));
    }

}

class HarborTableSeeder extends Seeder {

    public function run()
    {
        DB::table('harbors')->delete();

        Harbor::create(array(
        		'name' => 'Port du Havre',
        		'user_id' => 2,
        	));
    }

}

class CompanyTableSeeder extends Seeder {

    public function run()
    {
        DB::table('companies')->delete();

        Company::create(array(
        		'name' => 'Apple',
        		'address' => 'San Cupertino',
        		'user_id' => 1,
        	));
    }

}

class ShipTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ships')->delete();

        Ship::create(array(
        		'name' => 'Titanic',
        		'capacity' => 10,
        		'company_id' => 1,
        	));
    }

}

class StopTableSeeder extends Seeder {

    public function run()
    {
        DB::table('stops')->delete();

        Stop::create(array(
        		'ship_id' => 1,
        		'arrival' => Carbon::now()->subWeek(),
        		'departure' => Carbon::now()->subDay(),
        	));
    }

}

class ContainerTableSeeder extends Seeder {

    public function run()
    {
        DB::table('containers')->delete();

        Container::create(array(
        		'capacity' => 2,
        		'ship_id' => 1,
        		'harbor_id' => null,
        		'user_id' => 3,
        	));

        Container::create(array(
        		'capacity' => 4,
        		'ship_id' => null,
        		'harbor_id' => 1,
        		'user_id' => 3,
        	));
    }

}

class MovementTableSeeder extends Seeder {

    public function run()
    {
        DB::table('movements')->delete();

        Movement::create(array(
        		'moved_at' => Carbon::now()->subDays(2),
        		'ship_id' => 1,
        		'stop_id' => 1,
        		'container_id' => 2,
        		'is_loading' => false,
        	));
    }

}
