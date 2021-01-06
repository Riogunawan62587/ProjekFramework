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
        \App\User::create([
            'name'    => 'admin',
            'email'    => 'admin@gmail.com',
            'password'    => bcrypt('admin123'),
            'role'    => 'Admin',
            'nomor_telepon'   => '0912121212'
        ]);
    }
}
