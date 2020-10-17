<?php

use Illuminate\Database\Seeder;

class StatusPembayaransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table status_pembayarans

        $statuspembayarans = array(
            array('id' => 1,'status_jenispembayaran' => 'Terbayar','created_at' => '2020-10-15 06:46:51','updated_at' => '2020-10-15 06:46:51'),
            array('id' => 2,'status_jenispembayaran' => 'Belum Terbayar','created_at' => '2020-10-15 06:47:01','updated_at' => '2020-10-15 06:47:01')
        );
        
        DB::table('status_pembayarans')->insert($statuspembayarans);
    }
}
