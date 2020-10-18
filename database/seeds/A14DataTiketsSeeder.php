<?php

use Illuminate\Database\Seeder;

class A14DataTiketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_tikets

        $datatikets = array(
            array('id' => 1,'waktu_berangkat' => '2020-10-14 00:00:00','waktu_tiba' => '2020-10-14 08:00:00','gerbong_kode' => 'A','no_kursi' => 1,'harga' => 150000,'keretakelas_id' => 1,'admin_id' => 1,'status_id' => 1,'lokasi_berangkat' => 1,'lokasi_tiba' => 4,'created_at' => '2020-10-15 06:53:06','updated_at' => '2020-10-15 06:53:06'),
            array('id' => 2,'waktu_berangkat' => '2020-10-15 02:00:00','waktu_tiba' => '2020-10-15 12:00:00','gerbong_kode' => 'A','no_kursi' => 1,'harga' => 250000,'keretakelas_id' => 2,'admin_id' => 1,'status_id' => 2,'lokasi_berangkat' => 2,'lokasi_tiba' => 5,'created_at' => '2020-10-15 06:54:44','updated_at' => '2020-10-15 06:54:44'),
            array('id' => 3,'waktu_berangkat' => '2020-10-15 02:00:00','waktu_tiba' => '2020-10-15 12:00:00','gerbong_kode' => 'A','no_kursi' => 2,'harga' => 250000,'keretakelas_id' => 2,'admin_id' => 1,'status_id' => 1,'lokasi_berangkat' => 2,'lokasi_tiba' => 5,'created_at' => '2020-10-15 06:55:56','updated_at' => '2020-10-15 06:55:56')
        );
        
        DB::table('data_tikets')->insert($datatikets);
    }
}
