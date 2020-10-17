<?php

use Illuminate\Database\Seeder;

class DataKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_kelas

        $datakelas = array(
            array('id' => 1,'kelas_nama' => 'Ekonomi','created_at' => '2020-10-15 06:25:56','updated_at' => '2020-10-15 06:25:56'),
            array('id' => 2,'kelas_nama' => 'Bisnis','created_at' => '2020-10-15 06:26:53','updated_at' => '2020-10-15 06:26:53'),
            array('id' => 3,'kelas_nama' => 'Eksekutif','created_at' => '2020-10-15 06:27:08','updated_at' => '2020-10-15 06:27:08')
        );
        
        DB::table('data_kelas')->insert($datakelas);
    }
}
