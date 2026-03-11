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
            'principal_photo' => 'nullable|image|max:5120', // Max 5MB
        ]);

        // Update text settings
        Setting::updateOrCreate(['key' => 'hero_badge'], ['value' => $validated['hero_badge'], 'type' => 'text']);
        Setting::where('key', 'principal_name')->update(['value' => $validated['principal_name']]);
        Setting::where('key', 'principal_title')->update(['value' => $validated['principal_title']]);
        Setting::where('key', 'principal_heading')->update(['value' => $validated['principal_heading']]);
        Setting::where('key', 'principal_message')->update(['value' => $validated['principal_message']]);

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

        return redirect()->route('admin.settings.sekolah')->with('success', 'Pengaturan sambutan sekolah berhasil diperbarui.');
    }
}
