<?php

use Illuminate\Database\Seeder;

class A3DataUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table data_users

        $datausers = array(
            array('id' => 1,'nama' => 'User A','email' => 'user1@gmail.com','password' => Hash::make('password1'),'alamat' => 'JL. Mangga 2, Surabaya','tgl_lahir' => '1999-05-15','created_at' => '2020-10-15 06:37:53','updated_at' => '2020-10-15 06:37:53'),
            array('id' => 2,'nama' => 'User B','email' => 'user2@gmail.com','password' => Hash::make('password2'),'alamat' => 'JL. Anggur 1, Surabaya','tgl_lahir' => '1992-02-20','created_at' => '2020-10-15 06:38:43','updated_at' => '2020-10-15 06:38:43')
        );
        
        DB::table('data_users')->insert($datausers);
    }
}
