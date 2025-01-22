<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\FrequentlyAskedQuestion;

class FrequentlyAskedQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('frequently_asked_questions')->truncate();
        FrequentlyAskedQuestion::factory()->count(20)->create();
    }
}
