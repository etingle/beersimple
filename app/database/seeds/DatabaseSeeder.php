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
		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');
		$this->call('BeerTableSeeder');

		$this->command->info('Beer table seeded!');
		$this->call('RatingTableSeeder');

		$this->command->info('Rating table seeded!');

		// $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $faker=Faker\Factory::create();
        for ($i=1;$i<31;$i++)
        	$user=User::create(array(
        		'username' => $faker->userName,
		    	'email' => $faker->email,
    			'password' => Hash::make('test')));
    	    $user->save();

    }

}



class RatingTableSeeder extends Seeder {

    public function run()
    {
        DB::table('ratings')->delete();
		$faker=Faker\Factory::create();
        for ($i=1;$i<31;$i++)
        	for($n=1;$n<201;$n++)
		        $rating=Rating::create(array(
		        	'user_id' => $i,
		        	'beer_id' => $faker->numberBetween($min=1,$max=200),
		        	'rating' => $faker->numberBetween($min=1,$max=5),
		        	'review' => $faker->paragraph($nbSentences=2)));
		        $rating->save();
		for ($i=1;$i<1001;$i++)
			Beer::update_beer_count($i);

    }

}
