<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    use HasFactory;

    protected $table = 'suscriptors';

    protected $fillable = [
        'email',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public $timestamps = true;
}
