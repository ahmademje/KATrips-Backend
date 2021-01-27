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
            array('id' => 1,'nama' => 'Bekasi', 'kode' => 'BKS', 'created_at' => '2020-10-15 06:39:51','updated_at' => '2020-10-15 06:39:51'),
            array('id' => 2,'nama' => 'Blitar', 'kode' => 'BL', 'created_at' => '2020-10-15 06:40:03','updated_at' => '2020-10-15 06:40:03'),
            array('id' => 3,'nama' => 'Bogor', 'kode' => 'BOO', 'created_at' => '2020-10-15 06:41:48','updated_at' => '2020-10-15 06:41:48'),
            array('id' => 4,'nama' => 'Brebes', 'kode' => 'BB', 'created_at' => '2020-10-15 06:42:42','updated_at' => '2020-10-15 06:42:42'),
            array('id' => 5,'nama' => 'Cianjur', 'kode' => 'CJ', 'created_at' => '2020-10-15 06:43:02','updated_at' => '2020-10-15 06:43:02'),
            array('id' => 6,'nama' => 'Surabaya Gubeng', 'kode' => 'SGU', 'created_at' => '2020-10-15 06:43:03','updated_at' => '2020-10-15 06:43:03'),
            array('id' => 7,'nama' => 'Surabaya Pasar Turi', 'kode' => 'SBI', 'created_at' => '2020-10-15 06:41:48','updated_at' => '2020-10-15 06:41:48'),
            array('id' => 8,'nama' => 'Pasar Senen', 'kode' => 'PSE', 'created_at' => '2020-10-15 06:42:42','updated_at' => '2020-10-15 06:42:42'),
            array('id' => 9,'nama' => 'Gambir', 'kode' => 'GMR', 'created_at' => '2020-10-15 06:43:02','updated_at' => '2020-10-15 06:43:02'),
            array('id' => 10,'nama' => 'Bandung', 'kode' => 'BD', 'created_at' => '2020-10-15 06:43:03','updated_at' => '2020-10-15 06:43:03')
        );
        
        DB::table('data_stasiuns')->insert($datastasiuns);
    }
}
