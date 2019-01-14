<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = Faker\Factory::create(); //Import library faker

        $limit = 30; //Batasan jumlah data


        for ($i = 0; $i < $limit; $i++) {

        	DB::table('kontaks')->insert([
        		'nama' => $faker->name,
        		'email' => $faker->unique()->email,
        		'nohp' => $faker->phoneNumber,
        		'alamat' => $faker->address,
        	]);

        }
    }
}
