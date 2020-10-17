<?php

use Illuminate\Database\Seeder;

class DataPenumpangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_penumpangs

        $datapenumpangs = array(
            array('id' => 1,'nama_ktp' => 'Subaru','no_ktp' => '1122334455667788','bayi_id' => 1,'user_id' => 1,'created_at' => '2020-10-15 06:48:02','updated_at' => '2020-10-15 06:48:02'),
            array('id' => 2,'nama_ktp' => 'Barusu','no_ktp' => '8877665544332211', 'bayi_id' => NULL,'user_id' => 1,'created_at' => '2020-10-15 06:48:27','updated_at' => '2020-10-15 06:48:27')
        );
        
        DB::table('data_penumpangs')->insert($datapenumpangs);
    }
}
