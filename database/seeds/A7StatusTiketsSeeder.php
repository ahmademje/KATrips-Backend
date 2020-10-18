<?php

use Illuminate\Database\Seeder;

class A7StatusTiketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table status_tikets

        $statustikets = array(
            array('id' => 1,'status_jenis' => 'Tersedia','created_at' => '2020-10-15 06:43:33','updated_at' => '2020-10-15 06:43:33',),
            array('id' => 2,'status_jenis' => 'Terjual','created_at' => '2020-10-15 06:43;43','updated_at' => '2020-10-15 06:43:43',)
        );
        
        DB::table('status_tikets')->insert($statustikets);
    }
}
