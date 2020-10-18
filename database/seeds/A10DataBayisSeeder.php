<?php

use Illuminate\Database\Seeder;

class A10DataBayisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_bayis

        $databayis = array(
            array('id' => 1,'nama_nik' => 'Sarada','no_nik' => NULL,'tgl_lahir' => '2020-09-15','created_at' => '2020-10-15 06:20:50','updated_at' => '2020-10-15 06:20:50')
        );
        
        DB::table('data_bayis')->insert($databayis);
    }
}
