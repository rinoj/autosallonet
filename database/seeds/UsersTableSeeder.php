<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
            'name' => 'Jeezy',
            'email' => 'jeezy@gmail.com',
            'password' => bcrypt('test123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jayden',
            'email' => 'jayden@gmail.com',
            'password' => bcrypt('test123'),
        ]);
    }
}
