<?php

use Illuminate\Database\Seeder;

class A1UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table users

        $users = array(
            array('id' => 1,'name' => 'Admin A','email' => 'email1@gmail.com','password' => 'password1','created_at' => '2020-10-15 13:33:46','updated_at' => '2020-10-15 13:33:46'),
            array('id' => 2,'name' => 'Admin B','email' => 'email2@gmail.com','password' => 'password2','created_at' => '2020-10-15 13:34:10','updated_at' => '2020-10-15 13:34:10')
        );
        
        DB::table('users')->insert($users);
    }
}
