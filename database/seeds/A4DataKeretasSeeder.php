<?php

use Illuminate\Database\Seeder;

class A4DataKeretasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_keretas

        $datakeretas = array(
            array('id' => 1,'kereta_nama' => 'Jayabaya','created_at' => '2020-10-15 06:29:56','updated_at' => '2020-10-15 06:29:56'),
            array('id' => 2,'kereta_nama' => 'Mutiara Selatan','created_at' => '2020-10-15 06:30:07','updated_at' => '2020-10-15 06:30:07'),
            array('id' => 3,'kereta_nama' => 'Sancaka','created_at' => '2020-10-15 06:30:08','updated_at' => '2020-10-15 06:30:08'),
            array('id' => 4,'kereta_nama' => 'Logawa','created_at' => '2020-10-15 06:30:09','updated_at' => '2020-10-15 06:30:09'),
            array('id' => 5,'kereta_nama' => 'Probowangi','created_at' => '2020-10-15 06:30:10','updated_at' => '2020-10-15 06:30:10'),
            array('id' => 6,'kereta_nama' => 'Kertajaya','created_at' => '2020-10-15 06:30:10','updated_at' => '2020-10-15 06:30:10'),
            array('id' => 7,'kereta_nama' => 'Argo Bromo Anggrek','created_at' => '2020-10-15 06:30:10','updated_at' => '2020-10-15 06:30:10'),
            array('id' => 8,'kereta_nama' => 'Sembrani','created_at' => '2020-10-15 06:30:10','updated_at' => '2020-10-15 06:30:10'),
            array('id' => 9,'kereta_nama' => 'Bima','created_at' => '2020-10-15 06:30:10','updated_at' => '2020-10-15 06:30:10'),
            array('id' => 10,'kereta_nama' => 'Argo Wilis','created_at' => '2020-10-15 06:30:10','updated_at' => '2020-10-15 06:30:10')
        );
        
        DB::table('data_keretas')->insert($datakeretas);
    }
}
