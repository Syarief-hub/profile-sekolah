<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function editSekolah()
    {
        // Get all settings and format as key-value pairs
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return view('admin.settings.sekolah', compact('settings'));
    }

    public function updateSekolah(Request $request)
    {
        $validated = $request->validate([
            'hero_badge' => 'required|string|max:255',
            'principal_name' => 'required|string|max:255',
            'principal_title' => 'required|string|max:255',
            'principal_heading' => 'required|string|max:255',
            'principal_message' => 'required|string',
            'principal_quote' => 'nullable|string',
            'principal_photo' => 'nullable|image|max:5120', // Max 5MB
            'hero_image' => 'nullable|image|max:5120', // Max 5MB
        ]);

        // Update text settings
        Setting::updateOrCreate(['key' => 'hero_badge'], ['value' => $validated['hero_badge'], 'type' => 'text']);
        Setting::updateOrCreate(['key' => 'principal_name'], ['value' => $validated['principal_name'], 'type' => 'text']);
        Setting::updateOrCreate(['key' => 'principal_title'], ['value' => $validated['principal_title'], 'type' => 'text']);
        Setting::updateOrCreate(['key' => 'principal_heading'], ['value' => $validated['principal_heading'], 'type' => 'text']);
        Setting::updateOrCreate(['key' => 'principal_message'], ['value' => $validated['principal_message'], 'type' => 'text']);
        Setting::updateOrCreate(['key' => 'principal_quote'], ['value' => $validated['principal_quote'] ?? '', 'type' => 'text']);

        // Update photo if uploaded
        if ($request->hasFile('principal_photo')) {
            $setting = Setting::where('key', 'principal_photo')->first();
            
            // Delete old photo if exists
            if ($setting && $setting->value) {
                Storage::disk('public')->delete($setting->value);
            }

            $path = $request->file('principal_photo')->store('settings', 'public');
            Setting::updateOrCreate(
                ['key' => 'principal_photo'],
                ['value' => $path, 'type' => 'image']
            );
        }

        // Update hero_image if uploaded
        if ($request->hasFile('hero_image')) {
            $setting = Setting::where('key', 'hero_image')->first();
            
            // Delete old photo if exists
            if ($setting && $setting->value) {
                Storage::disk('public')->delete($setting->value);
            }

            $path = $request->file('hero_image')->store('settings', 'public');
            Setting::updateOrCreate(
                ['key' => 'hero_image'],
                ['value' => $path, 'type' => 'image']
            );
        }

        return redirect()->route('admin.settings.sekolah')->with('success', 'Pengaturan sambutan sekolah berhasil diperbarui.');
    }

    public function editStruktur()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return view('admin.settings.struktur', compact('settings'));
    }

    public function updateStruktur(Request $request)
    {
        $validated = $request->validate([
            'structure_komite_name' => 'required|string|max:255',
            'structure_tu_name' => 'required|string|max:255',
            'structure_waka_kurikulum_name' => 'required|string|max:255',
            'structure_waka_kesiswaan_name' => 'required|string|max:255',
            'structure_waka_sarpras_name' => 'required|string|max:255',
            'structure_waka_humas_name' => 'required|string|max:255',
        ]);

        foreach ($validated as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value, 'type' => 'text']);
        }

        return redirect()->route('admin.settings.struktur')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }
}
