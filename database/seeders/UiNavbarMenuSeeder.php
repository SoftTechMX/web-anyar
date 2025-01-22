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
            [
                'label' => 'Home',
                'route' => 'landing',
                'icon' => '',
                'parent_menu' => null,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'label' => 'Users',
                'route' => null,
                'icon' => '',
                'parent_menu' => null,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'label' => 'Login',
                'route' => 'login',
                'icon' => '',
                'parent_menu' => 2,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'label' => 'Register',
                'route' => 'register',
                'icon' => '',
                'parent_menu' => 2,
                'created_by' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}