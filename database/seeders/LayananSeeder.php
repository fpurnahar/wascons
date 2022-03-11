<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'title' => 'Perencanaan Konstruksi',
            'description' => 'Mencari Perusahaan Konstruksi yang andal dengan pengalaman luas untuk proyek Anda berikutnya? Di Wase Intan Perdana, kami mendukung keunggulan pekerjaan kami dan memberikan perhatian khusus kepada klien berdasarkan kebutuhan spesifik mereka. Jika Anda mencari Perencanaan Konstruksi profesional, silakan hubungi untuk konsultasi Anda.',
            'image' => '/assets/img/layanan/layanan_1.jpg',
        ]);
        Layanan::create([
            'title' => 'Perawatan Bangunan',
            'description' => 'Klien kami adalah prioritas nomor satu kami dan kami bekerja ekstra untuk memastikan mereka benar-benar puas. Dengan layanan ini, kami sepenuhnya siap untuk menangani bahkan proyek yang paling kompleks dan mendukung kualitas luar biasa dari pekerjaan kami. Hubungi kami hari ini dan cari tahu lebih banyak tentang apa yang dapat kami lakukan untuk Anda.',
            'image' => '/assets/img/layanan/layanan_2.jpg',
        ]);
    }
}
