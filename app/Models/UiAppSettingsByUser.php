<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiAppSettingsByUser extends Model
{
    use HasFactory;

    protected $table = "ui_app_settings_by_users";
    protected $guarded = [
        // Nothing
    ];
    public $timestamps = true;

    public function settings()
    {
        return $this->hasOne(UiAppSettings::class);
    }
}
