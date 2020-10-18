<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
        $this->call([
            A1UsersSeeder::class,
            A2PasswordResetsSeeder::class,
            A3DataUsersSeeder::class,
            A4DataKeretasSeeder::class,
            A5DataKelasSeeder::class,
            A6DataStasiunsSeeder::class,
            A7StatusTiketsSeeder::class,
            A8KodePembayaransSeeder::class,
            A9StatusPembayaransSeeder::class,
            A10DataBayisSeeder::class,
            A11DataPenumpangsSeeder::class,
            A12DataKeretaKelasSeeder::class,
            A13DataPemesanansSeeder::class,
            A14DataTiketsSeeder::class,
            A15DetailPemesanansSeeder::class,
        ]);
    }
}
