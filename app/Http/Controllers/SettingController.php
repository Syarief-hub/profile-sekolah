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
            'structure_komite_photo' => 'nullable|image|max:5120',
            'structure_tu_photo' => 'nullable|image|max:5120',
            'structure_waka_kurikulum_photo' => 'nullable|image|max:5120',
            'structure_waka_kesiswaan_photo' => 'nullable|image|max:5120',
            'structure_waka_sarpras_photo' => 'nullable|image|max:5120',
            'structure_waka_humas_photo' => 'nullable|image|max:5120',
        ]);

        $textFields = [
            'structure_komite_name', 'structure_tu_name',
            'structure_waka_kurikulum_name', 'structure_waka_kesiswaan_name',
            'structure_waka_sarpras_name', 'structure_waka_humas_name'
        ];

        foreach ($textFields as $key) {
            if (isset($validated[$key])) {
                Setting::updateOrCreate(['key' => $key], ['value' => $validated[$key], 'type' => 'text']);
            }
        }

        $photoFields = [
            'structure_komite_photo', 'structure_tu_photo',
            'structure_waka_kurikulum_photo', 'structure_waka_kesiswaan_photo',
            'structure_waka_sarpras_photo', 'structure_waka_humas_photo'
        ];

        foreach ($photoFields as $key) {
            if ($request->hasFile($key)) {
                $setting = Setting::where('key', $key)->first();
                if ($setting && $setting->value) {
                    Storage::disk('public')->delete($setting->value);
                }
                $path = $request->file($key)->store('settings', 'public');
                Setting::updateOrCreate(['key' => $key], ['value' => $path, 'type' => 'image']);
            }
        }

        return redirect()->route('admin.settings.struktur')->with('success', 'Struktur Organisasi beserta foto berhasil diperbarui.');
    }

    public function editSejarah()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return view('admin.settings.sejarah', compact('settings'));
    }

    public function updateSejarah(Request $request)
    {
        $validated = $request->validate([
            'sejarah_title' => 'nullable|string|max:255',
            'sejarah_content' => 'required|string',
            'sejarah_images' => 'nullable|array|max:4',
            'sejarah_images.*' => 'image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        Setting::updateOrCreate(['key' => 'sejarah_title'], ['value' => $validated['sejarah_title'], 'type' => 'text']);
        Setting::updateOrCreate(['key' => 'sejarah_content'], ['value' => $validated['sejarah_content'], 'type' => 'longtext']);

        if ($request->hasFile('sejarah_images')) {
            $setting = Setting::where('key', 'sejarah_images')->first();
            
            if ($setting && $setting->value) {
                $oldImages = json_decode($setting->value, true);
                if (is_array($oldImages)) {
                    foreach ($oldImages as $oldImage) {
                        if (!str_starts_with($oldImage, 'http')) {
                            Storage::disk('public')->delete($oldImage);
                        }
                    }
                }
            }

            $paths = [];
            foreach ($request->file('sejarah_images') as $file) {
                $paths[] = $file->store('settings', 'public');
            }

            Setting::updateOrCreate(
                ['key' => 'sejarah_images'],
                ['value' => json_encode($paths), 'type' => 'json']
            );
        }

        return redirect()->route('admin.settings.sejarah')->with('success', 'Informasi Sejarah berhasil diperbarui.');
    }

    public function editVisiMisi()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return view('admin.settings.visimisi', compact('settings'));
    }

    public function updateVisiMisi(Request $request)
    {
        $validated = $request->validate([
            'visi_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'misi_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('visi_image')) {
            $setting = Setting::where('key', 'visi_image')->first();
            if ($setting && $setting->value && !str_starts_with($setting->value, 'http')) {
                Storage::disk('public')->delete($setting->value);
            }
            $path = $request->file('visi_image')->store('settings', 'public');
            Setting::updateOrCreate(['key' => 'visi_image'], ['value' => $path, 'type' => 'image']);
        }

        if ($request->hasFile('misi_image')) {
            $setting = Setting::where('key', 'misi_image')->first();
            if ($setting && $setting->value && !str_starts_with($setting->value, 'http')) {
                Storage::disk('public')->delete($setting->value);
            }
            $path = $request->file('misi_image')->store('settings', 'public');
            Setting::updateOrCreate(['key' => 'misi_image'], ['value' => $path, 'type' => 'image']);
        }

        return redirect()->route('admin.settings.visimisi')->with('success', 'Foto Visi & Misi berhasil diperbarui.');
    }

    public function editOsisMpk()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return view('admin.settings.osismpk', compact('settings'));
    }

    public function updateOsisMpk(Request $request)
    {
        $validated = $request->validate([
            'osis_sambutan' => 'nullable|string',
            'osis_sambutan_photo' => 'nullable|image|max:5120',
            'ketua_osis_name' => 'nullable|string|max:255',
            'ketua_osis_role' => 'nullable|string|max:255',
            'ketua_osis_photo' => 'nullable|image|max:5120',
            'osis_photo' => 'nullable|image|max:5120',
            'mpk_photo' => 'nullable|image|max:5120',
            'osis_description' => 'required|string',
            'mpk_description' => 'required|string',
            'osis_vision' => 'required|string',
            'osis_mission' => 'required|string',
            'osis_program_1_title' => 'required|string|max:255',
            'osis_program_1_desc' => 'required|string',
            'osis_program_1_photo' => 'nullable|image|max:5120',
            'osis_program_2_title' => 'required|string|max:255',
            'osis_program_2_desc' => 'required|string',
            'osis_program_2_photo' => 'nullable|image|max:5120',
            'osis_program_3_title' => 'required|string|max:255',
            'osis_program_3_desc' => 'required|string',
            'osis_program_3_photo' => 'nullable|image|max:5120',
        ]);

        $photoFields = ['osis_sambutan_photo', 'ketua_osis_photo', 'osis_photo', 'mpk_photo', 'osis_program_1_photo', 'osis_program_2_photo', 'osis_program_3_photo'];

        foreach ($validated as $key => $value) {
            if (in_array($key, $photoFields)) continue; // Handle separately
            $type = in_array($key, ['osis_mission', 'osis_sambutan']) ? 'longtext' : 'text';
            Setting::updateOrCreate(['key' => $key], ['value' => $value ?? '', 'type' => $type]);
        }

        foreach ($photoFields as $key) {
            if ($request->hasFile($key)) {
                $setting = Setting::where('key', $key)->first();
                if ($setting && $setting->value) {
                    Storage::disk('public')->delete($setting->value);
                }
                $path = $request->file($key)->store('settings', 'public');
                Setting::updateOrCreate(['key' => $key], ['value' => $path, 'type' => 'image']);
            }
        }

        return redirect()->route('admin.settings.osismpk')->with('success', 'Profil OSIS & MPK berhasil diperbarui.');
    }

    public function editKurikulum()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $setting) {
            $settings[$setting->key] = $setting->value;
        }

        return view('admin.settings.kurikulum', compact('settings'));
    }

    public function updateKurikulum(Request $request)
    {
        $validated = $request->validate([
            'kurikulum_intro' => 'required|string',
            'kurikulum_fase_e_desc' => 'required|string',
            'kurikulum_fase_f_desc' => 'required|string',
            'kurikulum_p5_desc' => 'required|string',
        ]);

        foreach ($validated as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value, 'type' => 'longtext']);
        }

        return redirect()->route('admin.settings.kurikulum')->with('success', 'Informasi Kurikulum berhasil diperbarui.');
    }
}
