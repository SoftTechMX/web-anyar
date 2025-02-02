<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiAppSettings extends Model
{
    use HasFactory;

    protected $table = "ui_app_settings";

    protected $guarded = [
        // Nothing
    ];
    
    public $timestamps = true;
}
