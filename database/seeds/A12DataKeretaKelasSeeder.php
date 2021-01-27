<?php

use Illuminate\Database\Seeder;

class A12DataKeretaKelasSeeder extends Seeder
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
            array('id' => 2,'kereta_id' => 2,'kelas_id' => 2,'created_at' => '2020-10-15 06:30:53','updated_at' => '2020-10-15 06:30:53'),
            array('id' => 3,'kereta_id' => 3,'kelas_id' => 3,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 4,'kereta_id' => 4,'kelas_id' => 1,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 5,'kereta_id' => 5,'kelas_id' => 2,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 6,'kereta_id' => 6,'kelas_id' => 1,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 7,'kereta_id' => 7,'kelas_id' => 3,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 8,'kereta_id' => 8,'kelas_id' => 3,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 9,'kereta_id' => 9,'kelas_id' => 3,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33'),
            array('id' => 10,'kereta_id' => 1,'kelas_id' => 3,'created_at' => '2020-10-15 06:30:33','updated_at' => '2020-10-15 06:30:33')

        );
        
        DB::table('data_kereta_kelas')->insert($datakeretakelas);
    }
}
