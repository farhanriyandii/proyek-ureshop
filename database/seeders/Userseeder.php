<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make('admin123'),
            'role' => 'admin'
            
        ]);
    }
}
