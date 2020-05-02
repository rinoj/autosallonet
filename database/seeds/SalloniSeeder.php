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
        $markat = [['emri' => 'Alfa Romeo'],
['emri' => 'Audi'],
['emri' => 'BMW'],
['emri' => 'Bentley'],
['emri' => 'Citroen'],
['emri' => 'Fiat'],
['emri' => 'Ford'],
['emri' => 'Honda'],
['emri' => 'Hyundai'],
['emri' => 'Jaguar'],
['emri' => 'Jeep'],
['emri' => 'Kia'],
['emri' => 'Lancia'],
['emri' => 'Land rover'],
['emri' => 'Mazda'],
['emri' => 'Mercedes Benz'],
['emri' => 'Mini'],
['emri' => 'Mitsubishi'],
['emri' => 'Nissan'],
['emri' => 'Opel'],
['emri' => 'Peugeot'],
['emri' => 'Porsche'],
['emri' => 'Renault'],
['emri' => 'Rover'],
['emri' => 'Saab'],
['emri' => 'Seat'],
['emri' => 'Skoda'],
['emri' => 'Smart'],
['emri' => 'Subaru'],
['emri' => 'Suzuki'],
['emri' => 'Toyota'],
['emri' => 'Volkswagen'],
['emri' => 'Volvo']];

    	DB::table('marka')->insert($markat);

        //=====================================================================================

        //modeli

        DB::table('modeli')->insert([
            'emri' => 'Golf 5',
            'marka_id' => 1,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'Golf 6',
            'marka_id' => 1,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'Golf 7',
            'marka_id' => 1,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'Passat',
            'marka_id' => 1,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'A3',
            'marka_id' => 2,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'A4',
            'marka_id' => 2,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'A5',
            'marka_id' => 2,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'A6',
            'marka_id' => 2,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'A7',
            'marka_id' => 2,
        ]);

        DB::table('modeli')->insert([
            'emri' => '530',
            'marka_id' => 3,
        ]);

        DB::table('modeli')->insert([
            'emri' => '530',
            'marka_id' => 3,
        ]);

        DB::table('modeli')->insert([
            'emri' => '520',
            'marka_id' => 3,
        ]);

        DB::table('modeli')->insert([
            'emri' => '525',
            'marka_id' => 3,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'X5',
            'marka_id' => 3,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'X3',
            'marka_id' => 3,
        ]);

        DB::table('modeli')->insert([
            'emri' => 'X6',
            'marka_id' => 3,
        ]);

        //=====================================================================================

        //sallonet
        DB::table('salloni')->insert([
            'emri' => 'Auto Sherreti',
            'telefoni' => '+383000000',
            'adresa' => 'Ferizaj',
            'slug' => 'auto-sherreti',
            'lloji' => 'sallon',
            'user_id' => 1
        ]);

        DB::table('salloni')->insert([
            'emri' => 'Auto Alberti',
            'telefoni' => '+383000000',
            'adresa' => 'Prishtine',
            'slug' => 'auto-alberti',
            'lloji' => 'rent',
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
            'slug' => '1-golf-5-2008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-go789lf-5-2008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-vw-5-2008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-gol897f-5-2008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2245008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2087908',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-gol879f-5-2098708',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2012008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2021008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-200258',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-200788',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-223008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-202048',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-20008',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2908',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2058',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-5-2028',
            'dyer' => 4,
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);

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
            'slug' => '1-golf-6-2028',
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
            'slug' => '2-golf-5-2010',
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
            'slug' => '3-golf-5-2018',
            'marka_id' => 1,
            'modeli_id' => 1,
            'salloni_id' => 1
        ]);
    }
}
