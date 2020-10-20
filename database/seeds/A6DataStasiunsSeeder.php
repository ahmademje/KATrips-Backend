<?php

use Illuminate\Database\Seeder;

class A6DataStasiunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_stasiuns
        
        $datastasiuns = array(
            array('id' => 1,'stasiun_nama' => 'Bekasi (BKS)','created_at' => '2020-10-15 06:39:51','updated_at' => '2020-10-15 06:39:51'),
            array('id' => 2,'stasiun_nama' => 'Blitar (BL)','created_at' => '2020-10-15 06:40:03','updated_at' => '2020-10-15 06:40:03'),
            array('id' => 3,'stasiun_nama' => 'Bogor (BOO)','created_at' => '2020-10-15 06:41:48','updated_at' => '2020-10-15 06:41:48'),
            array('id' => 4,'stasiun_nama' => 'Brebes (BB)','created_at' => '2020-10-15 06:42:42','updated_at' => '2020-10-15 06:42:42'),
            array('id' => 5,'stasiun_nama' => 'Cianjur (CJ)','created_at' => '2020-10-15 06:43:02','updated_at' => '2020-10-15 06:43:02')
        );
        
        DB::table('data_stasiuns')->insert($datastasiuns);
    }
}
