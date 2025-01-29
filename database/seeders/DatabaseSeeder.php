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
            ServiceSeeder::class,
            CalendarSeeder::class,
            EventSeeder::class,
            UsersSeeder::class,
            PostSeeder::class,
            PersonSeeder::class,
            SocialNetworkSeeder::class,
        ]);
    }
}
