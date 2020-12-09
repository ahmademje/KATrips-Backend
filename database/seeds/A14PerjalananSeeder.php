<?php

use Illuminate\Database\Seeder;

class A14PerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perjalanans = array(
            array('id' => 1, 'waktu_berangkat' => '2020-10-15 02:00:00','waktu_tiba' => '2020-10-15 12:00:00', 'keretakelas_id' => 1, 'lokasi_berangkat_id' => 1, 'lokasi_tiba_id' => 2, 'created_at' => '2020-10-15 06:55:56','updated_at' => '2020-10-15 06:55:56'),
            array('id' => 2, 'waktu_berangkat' => '2020-10-16 02:00:00','waktu_tiba' => '2020-10-17 12:00:00', 'keretakelas_id' => 2, 'lokasi_berangkat_id' => 2, 'lokasi_tiba_id' => 3, 'created_at' => '2020-10-15 06:55:57','updated_at' => '2020-10-15 06:55:57'),
            array('id' => 3, 'waktu_berangkat' => '2020-10-17 02:00:00','waktu_tiba' => '2020-10-18 12:00:00', 'keretakelas_id' => 2, 'lokasi_berangkat_id' => 3, 'lokasi_tiba_id' => 4, 'created_at' => '2020-10-15 06:55:58','updated_at' => '2020-10-15 06:55:58')
        );

        DB::table('perjalanans')->insert($perjalanans);
    }
}