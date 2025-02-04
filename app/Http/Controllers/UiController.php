<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\Models\UiAppSettings;
use App\Models\UiAppSettingsByUser;

class UiController extends Controller
{
    public function index()
    {
        $settings = UiAppSettings::find(1);
        
        return view('page.ui.index')
            ->with('settings', $settings);
    }

    public function settings_save(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'id' => 'nullable|exists:ui_app_settings,id',
            'name' => 'nullable|string|max:255',
            'about_us' => 'nullable|string|max:255',
            'mision' => 'nullable|string|max:255',
            'vision' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:100',
            'address_street' => 'nullable|string|max:255',
            'address_cp' => 'nullable|string|max:10',
            'address_number' => 'nullable|string|max:10',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'skype' => 'nullable|string|max:255',
            'linkedin' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
        ]);

        $settings = UiAppSettings::updateOrCreate(
            ['id' => 1],
            $data
        );

        // UiAppSettingsByUser::updateOrCreate(
        //     ['id_user' => $user->id], // Condiciones de búsqueda
        //     ['id_configuration' => $settings->id] // Valores a actualizar o crear
        // );

        return Redirect::back();
    }
}
