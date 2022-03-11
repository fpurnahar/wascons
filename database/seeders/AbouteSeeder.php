<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AbouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'PT Wase Intan Perdana',
            'description' => 'Jika Anda sedang mencari Perusahaan Konstruksi yang andal, terpercaya, dan efisien, tidak perlu mencari yang lain selain Wase Intan Perdana. Apakah Anda memerlukan bantuan dalam proyek kecil atau pekerjaan yang lebih besar, kami ingin meringankan beban Anda dengan menyediakan layanan khusus kami. Cukup hubungi kami dan beri tahu kami apa yang Anda butuhkan.',
            'image' => '/assets/img/about/about.jpeg',
        ]);
    }
}
