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

function createDummyImage($folder, $text, $bgColor, $width=800, $height=600) {
    if(!Storage::disk('public')->exists($folder)) {
        Storage::disk('public')->makeDirectory($folder);
    }
    
    $image = imagecreatetruecolor($width, $height);
    
    list($r, $g, $b) = sscanf($bgColor, "#%02x%02x%02x");
    $bg = imagecolorallocate($image, $r, $g, $b);
    $textColor = imagecolorallocate($image, 255, 255, 255);
    
    imagefill($image, 0, 0, $bg);
    
    // Add simple text
    $fontId = 5; // Built-in font max size
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

echo "Memperbaiki gambar yang hilang menggunakan PHP GD...\n";

$count = 1;
foreach(Article::all() as $item) {
    $item->thumbnail = createDummyImage('articles', "Artikel $count", "#10b981");
    $item->save();
    $count++;
}

$count = 1;
foreach(Gallery::all() as $item) {
    $item->url = createDummyImage('galleries', "Galeri $count", "#3b82f6");
    $item->save();
    $count++;
}

$count = 1;
foreach(Extracurricular::all() as $item) {
    $item->image = createDummyImage('extracurriculars', "Ekstrakurikuler $count", "#8b5cf6");
    $item->save();
    $count++;
}

$count = 1;
foreach(Employee::all() as $item) {
    $item->image = createDummyImage('employees', "Profil $count", "#f59e0b", 400, 400);
    $item->save();
    $count++;
}

$count = 1;
foreach(Achievement::all() as $item) {
    $item->image = createDummyImage('achievements', "Prestasi $count", "#ef4444");
    $item->save();
    $count++;
}

echo "Semua gambar telah diperbarui dengan placeholder.\n";
