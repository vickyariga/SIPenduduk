<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('level_pendidikan')->insert([
            [
                'nama' => 'SD',
            ],
            [
                'nama' => 'SMP',
            ],
            [
                'nama' => 'SMA',
            ],
            [
                'nama' => 'S1',
            ]
        ]);
    }
}
