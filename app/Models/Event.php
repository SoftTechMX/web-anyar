<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    public function getFullCalendarJSFormat()
    {
        return [
            'id'     => $this->id,
            'title'  => $this->title,
            'start'  => Carbon::parse($this->begin_date)->format('Y-m-d\TH:i:s'),
            'end'    => Carbon::parse($this->end_date)->format('Y-m-d\TH:i:s'),
            'textColor'  => '#FFF',
            'classNames' => 'bg-primary text-white',
        ];
    }
}
