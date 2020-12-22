<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pekerjaan')->insert([
            [
                'nama' => 'PNS',
            ],
            [
                'nama' => 'Wiraswasta',
            ],
            [
                'nama' => 'Polri',
            ],
            [
                'nama' => 'TNI',
            ]
        ]);
    }
}
