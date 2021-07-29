<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
        	'nama' => 'Luffy',
            'judul_id' => 1,
            'gambar' => 'luffy.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Ace',
            'judul_id' => 1,
            'gambar' => 'Ace.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Brook',
            'judul_id' => 1,
            'gambar' => 'Brook.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Shanks',
            'judul_id' => 1,
            'gambar' => 'Shanks.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Fairy Tail',
            'judul_id' => 4,
            'gambar' => 'FairyTail.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Lucy',
            'judul_id' => 4,
            'gambar' => 'Lucy.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Natsu',
            'judul_id' => 4,
            'gambar' => 'natsu1.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Naruto',
            'judul_id' => 2,
            'gambar' => 'naruto1.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Sasuke',
            'judul_id' => 2,
            'gambar' => 'sasuke3.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Yondaime',
            'judul_id' => 2,
            'gambar' => 'yondaime2.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Saitama',
            'judul_id' => 3,
            'gambar' => 'saitama.png'
        ]);
    }
}
