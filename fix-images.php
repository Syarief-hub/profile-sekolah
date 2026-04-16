<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Extracurricular;
use App\Models\Employee;
use App\Models\Achievement;

echo "Memperbaiki gambar yang hilang...\n";

// Use a reliable placeholder image service instead of unsplash IDs to prevent 403 blocks
$fallbackImageContent = file_get_contents('https://placehold.co/800x600/34d399/ffffff/png?text=Image+Placeholder');

if(!$fallbackImageContent) {
    die("Gagal mengunduh gambar placeholder.");
}

function assignPlaceholder($folder, $content) {
    if(!Storage::disk('public')->exists($folder)) {
        Storage::disk('public')->makeDirectory($folder);
    }
    $filename = $folder . '/' . Str::random(10) . '.png';
    Storage::disk('public')->put($filename, $content);
    return $filename;
}

// Articles
$count = 0;
foreach(Article::all() as $item) {
    $content = file_get_contents('https://placehold.co/800x600/34d399/ffffff/png?text=Article+'.($count++));
    $item->thumbnail = assignPlaceholder('articles', $content ?: $fallbackImageContent);
    $item->save();
}

// Galleries
$count = 0;
foreach(Gallery::all() as $item) {
    $content = file_get_contents('https://placehold.co/800x600/3b82f6/ffffff/png?text=Gallery+'.($count++));
    $item->url = assignPlaceholder('galleries', $content ?: $fallbackImageContent);
    $item->save();
}

// Extracurriculars
$count = 0;
foreach(Extracurricular::all() as $item) {
    $content = file_get_contents('https://placehold.co/800x600/8b5cf6/ffffff/png?text=Ekstrakurikuler+'.($count++));
    $item->image = assignPlaceholder('extracurriculars', $content ?: $fallbackImageContent);
    $item->save();
}

// Employees
$count = 0;
foreach(Employee::all() as $item) {
    $content = file_get_contents('https://placehold.co/400x400/f59e0b/ffffff/png?text=Profil+'.($count++));
    $item->image = assignPlaceholder('employees', $content ?: $fallbackImageContent);
    $item->save();
}

// Achievements
$count = 0;
foreach(Achievement::all() as $item) {
    $content = file_get_contents('https://placehold.co/800x600/ef4444/ffffff/png?text=Prestasi+'.($count++));
    $item->image = assignPlaceholder('achievements', $content ?: $fallbackImageContent);
    $item->save();
}

echo "Semua gambar telah diperbarui dengan placeholder berhasil.\n";
