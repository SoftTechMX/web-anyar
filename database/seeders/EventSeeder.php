<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpia la tabla antes de insertar datos
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('events')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Fecha inicial para los eventos
        $startDate = Carbon::now();

        // Bucle para insertar eventos
        for ($i = 0; $i < 15; $i++)
        {
            $sesion = $i + 1;

            $row = [
                'title'         => "Industry 4.0 Innovation and Automation",
                'description'   => "Session {$sesion}",
                'id_calendar'   => 1,
                'begin_date'    => $startDate->copy()->addDays($i)->format('Y-m-d'), // Fecha de inicio
                'end_date'      => $startDate->copy()->addDays($i)->format('Y-m-d'), // Mismo día (evento de un solo día)
                'begin_time'    => '09:00:00', // Hora de inicio fija, puedes personalizar
                'end_time'      => '12:00:00', // Hora de finalización fija, puedes personalizar
                'created_at'    => now(),
                'updated_at'    => now(),
            ];

            Event::insert($row);
        }
    }
}
