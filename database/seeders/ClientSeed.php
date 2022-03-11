<?php

namespace Database\Seeders;

use App\Models\ClientBanner;
use Illuminate\Database\Seeder;

class ClientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientBanner::create([
            'title' => 'client 1',
            'image' => '/assets/img/clients/client_ancol.png',
        ]);
        ClientBanner::create([
            'title' => 'client 1',
            'image' => '/assets/img/clients/client_bjb.png',
        ]);
        ClientBanner::create([
            'title' => 'client 1',
            'image' => '/assets/img/clients/client_edco_energy.png',
        ]);

        ClientBanner::create([
            'title' => 'client 1',
            'image' => '/assets/img/clients/client_ipb.png',
        ]);
        ClientBanner::create([
            'title' => 'client 1',
            'image' => '/assets/img/clients/client_transjakarta.png',
        ]);
        ClientBanner::create([
            'title' => 'client 1',
            'image' => '/assets/img/clients/lpse_pemerintah.png',
        ]);
    }
}
