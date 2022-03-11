<?php

namespace Database\Seeders;

use App\Models\ClientBanner;
use App\Models\Portfolio;
use App\Models\Services;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AbouteSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(LayananSeeder::class);
        $this->call(InformationCompanySeeder::class);
        $this->call(ClientSeed::class);

        Portfolio::factory(3)->create();
    }
}
