<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gejala')->insert([
            [
                "konten" => "Flu, Batuk, dan demam",
                "gambar" => "images/close.png"
            ],
            [
                "konten" => "Hilang indra penciuman/pengecapan/bisa disertai mual/muntah/diare",
                "gambar" => "images/close.png"
            ],
            [
                "konten" => "Rambut rontok tanpa alasan yang jelas",
                "gambar" => "images/close.png"
            ],
            [
                "konten" => "Mengalami Sesak Nafas",
                "gambar" => "images/close.png"
            ],
            [
                "konten" => "Batuk tak kunjung sembuh / Sakit tenggorokan",
                "gambar" => "images/close.png"
            ],
            [
                "konten" => "Kelelahan / Bisa disertai nyeri otot",
                "gambar" => "images/close.png"
            ],
            [
                "konten" => "Gejala tak biasa berlangsung lama / jantung abnormal",
                "gambar" => "images/close.png"
            ],
        ]);
    }
}
