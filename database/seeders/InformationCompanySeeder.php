<?php

namespace Database\Seeders;

use App\Models\InformationCompany;
use Illuminate\Database\Seeder;

class InformationCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformationCompany::create([
            'company_name' => 'PT WASE INTAN PERDANA',
            'company_email' => 'waseintanperdana@gmail.com',
            'company_address' => 'Jl. Komp. Departemen Dalam Negeri No.19, RT.3/RW.008, Meruya Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 15157',
            'company_number_phone' => '+62 821-1174-7520',
            'company_facebook' => 'https://www.facebook.com/waseintanperdana',
            'company_instagram' => 'https://www.instagram.com/wase.ip/?utm_medium=copy_link',
            'company_linkedin' => 'https://www.linkedin.com/in/ryan-mizaz-7416b116a/',
            'company_logo' => '/assets/img/logo/logo.png',
        ]);
    }
}
