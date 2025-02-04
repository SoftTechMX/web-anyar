<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            FrequentlyAskedQuestionsSeeder::class,
            UiNavbarMenuSeeder::class,
            RolesSeeder::class,
            UsersSeeder::class,
            ServiceSeeder::class,
            CalendarSeeder::class,
            EventSeeder::class,
            PostSeeder::class,
            PersonSeeder::class,
            SocialNetworkSeeder::class,
            CategorySeeder::class,
            UiAppSettingsSeeder::class,
        ]);
    }
}
