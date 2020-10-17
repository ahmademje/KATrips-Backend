<?php

use Illuminate\Database\Seeder;

class DataKeretasSeeder extends Seeder
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
            array('id' => 2,'kereta_nama' => 'Mutiara Hitam','created_at' => '2020-10-15 06:30:07','updated_at' => '2020-10-15 06:30:07')
        );
        
        DB::table('data_keretas')->insert($datakeretas);
    }
}
