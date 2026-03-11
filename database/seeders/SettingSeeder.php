<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key' => 'principal_name',
                'value' => 'Drs. H. Ahmad Dahlan, M.Pd',
                'type' => 'text'
            ],
            [
                'key' => 'principal_title',
                'value' => 'Kepala Sekolah SMA N 1 Suwawa',
                'type' => 'text'
            ],
            [
                'key' => 'principal_heading',
                'value' => 'Menyongsong Masa Depan dengan Pendidikan Berkualitas',
                'type' => 'text'
            ],
            [
                'key' => 'principal_message',
                'value' => '<p class="first-letter:text-5xl first-letter:font-heading first-letter:font-black first-letter:text-primary first-letter:mr-2 first-letter:float-left">
                                Assalamu\'alaikum Warahmatullahi Wabarakatuh. Puji syukur kita panjatkan kehadirat Allah SWT. SMA Negeri 1 Suwawa terus berkomitmen memberikan layanan pendidikan optimal guna mencetak generasi yang cerdas, terampil, dan berkarakter.
                            </p>
                            <p>
                                Melalui portal resmi ini, kami berupaya menghadirkan transparansi dan kemudahan akses informasi bagi seluruh civitas akademika, orang tua, dan masyarakat luas agar sinergi pendidikan terus terjalin erat.
                            </p>
                            <p class="font-bold text-slate-800 text-xl border-l-4 border-secondary pl-5 py-2 mt-6">
                                Bersama wujudkan SMAN 1 Suwawa HEBAT (Handal, Empati, Berprestasi, Agamis, Tangguh).
                            </p>',
                'type' => 'longtext'
            ],
            [
                'key' => 'principal_photo',
                'value' => '', // Empty default, will use fallback in blade
                'type' => 'image'
            ],
            [
                'key' => 'hero_badge',
                'value' => 'Tahun Ajaran 2026/2027',
                'type' => 'text'
            ]
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
