<?php

use Illuminate\Database\Seeder;

class A13DataPemesanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table data_pemesanans

        $datapemesanans = array(
            array('id' => 1,'waktu_pesan' => '2020-10-15 06:49:58','invoicecetak_no' => 6486511,'total_harga' => 450000,'kodepembayaran_id' => 1,'pembayaranstatus_id' => 2,'user_id' => 1,'created_at' => '2020-10-15 06:49:58','updated_at' => '2020-10-15 06:49:58')
        );
        
        DB::table('data_pemesanans')->insert($datapemesanans);
    }
}
