<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UiNavbarMenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ui_navbar_menus')->truncate();
        
        DB::table('ui_navbar_menus')->insert([
            // MENU 1
            [
                'label' => 'Home',
                'route' => 'landing',
                'icon' => '',
                'parent_menu' => null,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // MENU 2
            [
                'label' => 'Calendar',
                'route' => 'calendar.index',
                'icon' => '',
                'parent_menu' => null,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // MENU 3
            [
                'label' => 'News',
                'route' => 'posts.index',
                'icon' => '',
                'parent_menu' => null,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}