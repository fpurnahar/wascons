<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create([
            'icon' => "<i class='bx bxs-check-shield'></i>",
            'title' => 'Tenaga Profesional',
            'description' => 'Direalisasikan oleh tenaga profesional yang memiliki kompetensi dan berpengalaman di bidangnya.',
        ]);
        Services::create([
            'icon' => "<i class='bx bx-paint-roll'></i>",
            'title' => 'Free Desing 2D & 3D',
            'description' => 'Kami berikan free desain 2D & 3D apabila Anda melanjutkan ke tahap pembangunan bersama kami.',
        ]);
        Services::create([
            'icon' => "<i class='bx bxs-badge-dollar'></i>",
            'title' => "Harga Kompetitif",
            'description' => 'Dapatkan penawaran harga terbaik dari kami dengan mengonsultasikan rumah idaman Anda. Kami akan kalkulasikan pada Rencana Anggaran Biaya dengan menyesuaikan budget anda.',
        ]);

        Services::create([
            'icon' => "<i class='bx bxs-hand'></i>",
            'title' => 'First Hand',
            'description' => 'Pengerjaan pembangunan kami lakukan secara mandiri, tanpa mengalihkannya ke pihak lain. Dengan didukung tenaga ahli dan profesional, kami pastikan hasil konstruksi sesuai dengan rencana.',
        ]);
        Services::create([
            'icon' => "<i class='bx bx-award'></i>",
            'title' => 'Bergaransi',
            'description' => 'Masa pemeliharaan bangunan (retensi) kami berikan selama 2 bulan. Kami juga memberikan jaminan sebesar 5% dari nilai kontrak guna menjaga kepercayaan Anda kepada kami.',
        ]);
        Services::create([
            'icon' => "<i class='bx bx-arch'></i>",
            'title' => 'Free Konsultasi',
            'description' => 'Konsultasi Sepuas Mungkin, Dengan didukung tenaga ahli dan profesional, kami pastikan hasil konstruksi sesuai dengan rencana.',
        ]);
    }
}
