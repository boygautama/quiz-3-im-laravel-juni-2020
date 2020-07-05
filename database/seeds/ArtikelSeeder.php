<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'artikel_judul' => Str::random(10),
                'artikel_isi' => Str::random(30),
                'artikel_slug' => Str::random(10),
                'artikel_tag' => Str::random(20),
                'user_id' => '1',
            ],
            [
                'artikel_judul' => Str::random(10),
                'artikel_isi' => Str::random(30),
                'artikel_slug' => Str::random(10),
                'artikel_tag' => Str::random(20),
                'user_id' => '1',
            ]
        ]);
    }
}
