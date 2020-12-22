<?php

namespace Database\Seeders;

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
        // \App\Models\Nagari::factory(2)->create();
        // \App\Models\Jorong::factory(2)->create();
        // \App\Models\KartuKeluarga::factory(3)->create();
        // $this->call(NagariSeeder::class);
        // $this->call(JorongSeeder::class);

        $nagaris = \App\Models\Nagari::factory(1)->create();

        foreach ($nagaris as $nagari) {
        $jorongs = \App\Models\Jorong::factory(1)->create(['nagari_id' => $nagari->id]);
        }

        foreach ($jorongs as $jorong) {
        $kartukeluargas	= \App\Models\KartuKeluarga::factory(1)->create(['jorong_id' => $jorong->id]);
        }


        $levelpendidikans = \App\Models\LevelPendidikan::factory(1)->create();
        $kewarganegaraans = \App\Models\Kewarganegaraan::factory(1)->create();
        $pekerjaans = \App\Models\Pekerjaan::factory(1)->create();

        foreach ($kartukeluargas as $kartukeluarga) {
            foreach ($levelpendidikans as $levelpendidikan) {
                foreach ($kewarganegaraans as $kewarganegaraan) {
                    foreach ($pekerjaans as $pekerjaan) {
                     \App\Models\Penduduk::factory(1)->create([
                     'pekerjaan_id' => $pekerjaan->id
                     , 'kewarganegaraan_id' => $kewarganegaraan->id
                     , 'level_pendidikan_id' => $levelpendidikan->id
                     , 'kartu_keluarga_id' => $kartukeluarga->id
                    ]);
                    }
                }
            }
        }    


  //       foreach ($kartukeluargas as $kartu_keluarga) {
  //       	\App\Models\Penduduk::factory(1)->create(['kartu_keluarga_id' => $kartu_keluarga->id]);
  //       }

  //       $levelpendidikans = \App\Models\LevelPendidikan::factory(1)->create();

  //       foreach ($levelpendidikans as $level_pendidikan) {
  //       	\App\Models\Penduduk::factory(1)->create(['level_pendidikan_id' => $level_pendidikan->id]);
  //       }

  //       $kewarganegaraans = \App\Models\Kewarganegaraan::factory(1)->create();
		
		// foreach ($kewarganegaraans as $kewarganegaraan) {
  //       	\App\Models\Penduduk::factory(1)->create(['kewarganegaraan_id' => $kewarganegaraan->id]);
  //       }

  //       $pekerjaans = \App\Models\Pekerjaan::factory(1)->create();
        
  //       foreach ($pekerjaans as $pekerjaan) {
  //       	\App\Models\Penduduk::factory(1)->create(['pekerjaan_id' => $pekerjaan->id]);
  //       }


        // $this->call(PendudukSeeder::class);


        
    }
}
