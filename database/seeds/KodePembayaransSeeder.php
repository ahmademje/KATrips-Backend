<?php

use Illuminate\Database\Seeder;

class KodePembayaransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table kode_pembayarans

        $kodepembayarans = array(
            array('id' => 1,'pembayarankode_no' => 863829328,'created_at' => '2020-10-15 06:45:17','updated_at' => '2020-10-15 06:45:17'),
            array('id' => 2,'pembayarankode_no' => 873930329,'created_at' => '2020-10-15 06:45:48','updated_at' => '2020-10-15 06:45:48')
        );
        
        DB::table('kode_pembayarans')->insert($kodepembayarans);
    }
}
