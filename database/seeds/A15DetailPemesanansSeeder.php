<?php

use Illuminate\Database\Seeder;

class A15DetailPemesanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table detail_pemesanans

        $detailpemesanans = array(
            array('id' => 2,'penumpang_id' => 1,'tiket_id' => 2,'pemesanan_id' => 1,'created_at' => '2020-10-15 06:56:47','updated_at' => '2020-10-15 06:56:47')
        );
        
        DB::table('detail_pemesanans')->insert($detailpemesanans);
    }
}
