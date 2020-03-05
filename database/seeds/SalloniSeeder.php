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

        DB::table('marka')->insert([
            'emri' => 'Opel',
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

        DB::table('salloni')->insert([
            'emri' => 'Auto Alberti',
            'telefoni' => '+383000000',
            'adresa' => 'Prishtine',
            'user_id' => 2
        ]);


        //=====================================================================================

        //veturat

        DB::table('vetura')->insert([
            'cmimi' => 5400,
            'km' => 192000,
            'viti' => '2010',
            'marshi' => 1,
            'lenda' => 'Nafte',
            'ngjyra' => 'E zeze',
            'kubikazha' => 1996,
            'doganuar' => true,
            'interier' => 'I zi',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

        DB::table('vetura')->insert([
            'cmimi' => 6300,
            'km' => 115000,
            'viti' => '2010',
            'marshi' => 1,
            'lenda' => 'Nafte',
            'ngjyra' => 'E zeze',
            'kubikazha' => 1996,
            'doganuar' => true,
            'interier' => 'I zi',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

        DB::table('vetura')->insert([
            'cmimi' => 5800,
            'km' => 215000,
            'viti' => '2008',
            'marshi' => 1,
            'lenda' => 'Nafte',
            'ngjyra' => 'E zeze',
            'kubikazha' => 1996,
            'doganuar' => true,
            'interier' => 'I zi',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);
    }
}
