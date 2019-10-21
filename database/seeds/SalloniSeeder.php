<?php

use Illuminate\Database\Seeder;

class SalloniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //markat
    	DB::table('marka')->insert([
            'emri' => 'Volkswagen',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Audi',
        ]);

        DB::table('marka')->insert([
            'emri' => 'BMW',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Mercedes',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Ford',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Nissan',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Skoda',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Honda',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Peugeot',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Renault',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Citroen',
        ]);

        DB::table('marka')->insert([
            'emri' => 'Range Rover',
        ]);

        //=====================================================================================

        //modeli

        DB::table('modeli')->insert([
            'emri' => 'Golf 5',
            'marka_id' => 1,
        ]);

        //=====================================================================================

        //sallonet
        DB::table('salloni')->insert([
            'emri' => 'Auto Sherreti',
            'telefoni' => '+383000000',
            'adresa' => 'Ferizaj',
            'user_id' => 1
        ]);
    }
}
