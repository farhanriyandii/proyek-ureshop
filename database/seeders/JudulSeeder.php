<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juduls')->insert([
        	'nama' => 'anime',
        	'judul' => 'one piece',
        	'gambar' => 'onepiece.png',
        ]);

        DB::table('juduls')->insert([
        	'nama' => 'anime',
        	'judul' => 'naruto',
        	'gambar' => 'naruto.png',
        ]);

        DB::table('juduls')->insert([
        	'nama' => 'anime',
        	'judul' => 'one punch man',
        	'gambar' => 'onepunchman.png',
        ]);

        DB::table('juduls')->insert([
        	'nama' => 'anime',
        	'judul' => 'fairy tail',
        	'gambar' => 'fairytail.png',
        ]);


        
    }
}
