<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Extracurricular;
use App\Models\Achievement;

function createDummyImage($folder, $text, $bgColor, $width=800, $height=600) {
    if(!Storage::disk('public')->exists($folder)) {
        Storage::disk('public')->makeDirectory($folder);
    }
    
    $image = imagecreatetruecolor($width, $height);
    
    list($r, $g, $b) = sscanf($bgColor, "#%02x%02x%02x");
    $bg = imagecolorallocate($image, $r, $g, $b);
    $textColor = imagecolorallocate($image, 255, 255, 255);
    
    imagefill($image, 0, 0, $bg);
    
    $fontId = 5; 
    $textWidth = imagefontwidth($fontId) * strlen($text);
    $textHeight = imagefontheight($fontId);
    
    $x = ($width - $textWidth) / 2;
    $y = ($height - $textHeight) / 2;
    imagestring($image, $fontId, $x, $y, $text, $textColor);
    
    $filename = $folder . '/' . Str::random(10) . '.png';
    $path = Storage::disk('public')->path($filename);
    
    imagepng($image, $path);
    imagedestroy($image);
    
    return $filename;
}

echo "Memasukkan data ekstrakurikuler dan prestasi...\n";

// Clear existing items
Extracurricular::truncate();
Achievement::truncate();

// ORGANISASI
$ekskul_data = [
    ['name' => 'Pramuka', 'schedule' => 'Selasa, Kamis (Sore: 04.00)', 'color' => '#8b5cf6'],
    ['name' => 'Basket', 'schedule' => 'Setiap hari (Sore: 04.00)', 'color' => '#f97316'],
    ['name' => 'Taekwondo', 'schedule' => 'Senin, Rabu (Sore: 04.00)', 'color' => '#eab308'],
    ['name' => 'Karate', 'schedule' => 'Senin, Rabu (Sore: 04.00)', 'color' => '#ef4444'],
    ['name' => 'Voly', 'schedule' => 'Kamis (Sore: 04.00)', 'color' => '#3b82f6'],
    ['name' => 'Sendratasik (Tari, Drama, Musik)', 'schedule' => 'Kamis (Sore: 04.00)', 'color' => '#ec4899'],
    ['name' => 'PIK R', 'schedule' => '', 'color' => '#14b8a6'],
    ['name' => 'Rohis', 'schedule' => '', 'color' => '#10b981'],
    ['name' => 'PMR', 'schedule' => '', 'color' => '#ef4444'],
    ['name' => 'Paskib', 'schedule' => 'Sabtu, Minggu (Pagi: 08.00)', 'color' => '#64748b'],
];

foreach($ekskul_data as $item) {
    Extracurricular::create([
        'name' => $item['name'],
        'category' => 'Umum',
        'schedule' => $item['schedule'] ?: 'Jadwal belum ditentukan',
        'description' => 'Kegiatan organisasi ' . $item['name'] . ' di SMA Negeri 1 Suwawa.',
        'image' => createDummyImage('extracurriculars', $item['name'], $item['color'])
    ]);
}

// PRESTASI
$prestasi_data = [
    [
        'title' => 'Lolos Seleksi Kejurnas Olahraga', 
        'category' => 'Olahraga', 
        'student_name' => 'Bambang Muhammad', 
        'level' => 'Nasional', 
        'achievement_year' => '2025-11-23',
        'color' => '#ef4444'
    ],
    [
        'title' => 'Juara 1 Basket (3x3)', 
        'category' => 'Olahraga', 
        'student_name' => 'Bambang Muhammad / Tim', 
        'level' => 'Provinsi', 
        'achievement_year' => '2025-12-19',
        'color' => '#f97316'
    ],
    [
        'title' => 'Juara 2 TomyniCup', 
        'category' => 'Olahraga', 
        'student_name' => 'Tim Sepak Bola', 
        'level' => 'Provinsi', 
        'achievement_year' => '2025-05-11',
        'color' => '#22c55e'
    ],
    [
        'title' => 'Lolos PranSakaNasional', 
        'category' => 'Non-Akademik', 
        'student_name' => '4 Orang', 
        'level' => 'Nasional', 
        'achievement_year' => '2025-11-09',
        'color' => '#8b5cf6'
    ],
    [
        'title' => 'Prestasi Karate Nasional', 
        'category' => 'Olahraga', 
        'student_name' => 'Anggota Karate', 
        'level' => 'Nasional', 
        'achievement_year' => '2025-12-01',
        'color' => '#ef4444'
    ],
    [
        'title' => 'Anggota Paskibraka Provinsi', 
        'category' => 'Non-Akademik', 
        'student_name' => '2 Orang', 
        'level' => 'Provinsi', 
        'achievement_year' => '2025-08-17',
        'color' => '#64748b'
    ],
    [
        'title' => 'Anggota Paskibraka Kabupaten', 
        'category' => 'Non-Akademik', 
        'student_name' => '2 Orang', 
        'level' => 'Kabupaten', 
        'achievement_year' => '2025-08-17',
        'color' => '#64748b'
    ]
];

foreach($prestasi_data as $i => $item) {
    Achievement::create([
        'title' => $item['title'],
        'category' => $item['category'],
        'student_name' => $item['student_name'],
        'level' => $item['level'],
        'achievement_year' => $item['achievement_year'],
        'image' => createDummyImage('achievements', "Prestasi " . ($i+1), $item['color'])
    ]);
}

echo "Sukses memasukkan semua data!\n";
