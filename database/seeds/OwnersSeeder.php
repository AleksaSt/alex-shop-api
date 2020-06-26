<?php

use Illuminate\Database\Seeder;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([

            [
                'name' => 'Stefan Stefanovic'
            ],

            [
                'name' => 'Petar Petrovic'
            ],

            [
                'name' => 'Ivan Ivanovic'
            ],

            [
                'name' => 'Stevan Stevanovic'
            ],

            [
                'name' => 'Jovan Jovanovic'
            ],

            [
                'name' => 'Nemanja Nemanjic'
            ],

            [
                'name' => 'Nebojsa Nebojsic'
            ]

        ]);
    }
}
