<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SocialNetwork;

class SocialNetworkSeeder extends Seeder
{
    public function run(): void
    {
        SocialNetwork::factory(10)->create();
    }
}
