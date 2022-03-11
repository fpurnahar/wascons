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
            'title' => 'WASCONS',
            'description' => 'PT. Wase Intan Perdana atau yang biasa disebut dengan Wase Construction (WASCONS) merupakan Kontraktor area Kota Tangerang dan sekitarnya, WASCONS Kontraktor Bangunan Komersial yang senantiasa menjaga kepercayaan client untuk mewujudkan setiap bangunan yang di impikan...',
            'image' => '/assets/img/about/1646763851_image_about.jpg',
        ]);
    }
}
