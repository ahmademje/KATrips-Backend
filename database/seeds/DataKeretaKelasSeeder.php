<?php

use Illuminate\Database\Seeder;

class DataKeretaKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_kereta_kelas

        $datakeretakelas = array(
            array('id' => 1,'kereta_id' => 1,'kelas_id' => 1,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 2,'kereta_id' => 1,'kelas_id' => 2,'created_at' => '2020-10-15 06:30:53','updated_at' => '2020-10-15 06:30:53')
        );
        
        DB::table('data_kereta_kelas')->insert($datakeretakelas);
    }
}
