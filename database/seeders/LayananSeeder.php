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
            'title' => 'Jasa Kontraktor',
            'description' => 'Mencari Perusahaan Konstruksi yang andal dengan pengalaman luas untuk proyek Anda berikutnya? Di Wase Construction, kami mendukung keunggulan pekerjaan kami dan memberikan perhatian khusus kepada klien berdasarkan kebutuhan spesifik mereka. Jika Anda mencari Jasa Konstruksi profesional, silakan hubungi kami untuk konsultasi Anda.',
            'image' => '/assets/img/layanan/1646765068_image_layanan.jpg',
        ]);
        Layanan::create([
            'title' => 'Jasa Renovasi',
            'description' => 'Klien kami adalah prioritas nomor satu kami dan kami bekerja ekstra untuk memastikan mereka benar-benar puas. Dengan layanan ini, kami sepenuhnya siap untuk menangani bahkan proyek yang paling kompleks dan mendukung kualitas luar biasa dari pekerjaan kami. Hubungi kami hari ini dan cari tahu lebih banyak tentang apa yang dapat kami lakukan untuk Anda.',
            'image' => '/assets/img/layanan/1646764445_image_layanan.jpg',
        ]);
    }
}
