<?php

use Illuminate\Database\Seeder;

class A15DataTiketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datatikets = array(
            array('id' => 1,'gerbong_kode' => 'A','no_kursi' => 1, 'perjalanan_id' => 2, 'admin_id' => 1,'status_id' => 1,'created_at' => '2020-10-15 06:53:06','updated_at' => '2020-10-15 06:53:06'),
            array('id' => 2,'gerbong_kode' => 'A','no_kursi' => 1, 'perjalanan_id' => 2, 'admin_id' => 1,'status_id' => 2,'created_at' => '2020-10-15 06:54:44','updated_at' => '2020-10-15 06:54:44'),
            array('id' => 3,'gerbong_kode' => 'A','no_kursi' => 2, 'perjalanan_id' => 3, 'admin_id' => 1,'status_id' => 1,'created_at' => '2020-10-15 06:55:56','updated_at' => '2020-10-15 06:55:56')
        );
        
        DB::table('data_tikets')->insert($datatikets);
    }
}
