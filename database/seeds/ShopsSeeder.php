<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([

            [
                'name' => 'General Goods Store',
                'user_id' => 1
            ],

            [
                'name' => 'Pekara Petrovic',
                'user_id' => 2
            ],

            [
                'name' => 'Automehanicar Zoki',
                'user_id' => 3
            ],

            [
                'name' => 'Gigatron',
                'user_id' => 4
            ],

            [
                'name' => 'Winwin',
                'user_id' => 5
            ],

            [
                'name' => 'Technomanija',
                'user_id' => 6
            ],

            [
                'name' => 'Dr.Techno',
                'user_id' => 7
            ]

        ]);
    }
    
}
