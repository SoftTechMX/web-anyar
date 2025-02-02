<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name'          => 'Bayron Jonathan Vazquez',
                'email'         => 'bayronnjonathan@gmail.com',
                'password'      => Hash::make('123456'),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('users')->insert($data);

        $admin = User::find(1);
        $admin->assignRole('admin');
        
        User::factory(5)->create();
    }
}
