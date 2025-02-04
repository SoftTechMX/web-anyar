<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Calendar;
use Carbon\Carbon;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title'         => 'Conference Schedule',
                'description'   => 'In the following calendar you can see the dates of the conferences we have scheduled for the near future, as well as past events.',
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('calendars')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Calendar::insert($data);
    }
}
