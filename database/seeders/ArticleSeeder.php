<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('role', 'Admin')->first();
        
        if (!$admin) {
            $admin = User::create([
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'role' => 'Admin',
                'password' => bcrypt('password')
            ]);
        }

        // Artikel 1
        Article::create([
            'title' => 'Pendaftaran PPDB Jalur Prestasi dan Zonasi Resmi Dibuka',
            'slug' => Str::slug('Pendaftaran PPDB Jalur Prestasi dan Zonasi Resmi Dibuka') . '-' . time(),
            'category' => 'Pengumuman',
            'date' => '2026-03-10',
            'user_id' => $admin->id,
            'content' => '<p>Penerimaan Peserta Didik Baru (PPDB) SMA Negeri 1 Suwawa Tahun Ajaran 2026/2027 jalur Prestasi dan Zonasi telah resmi dibuka. Proses pendaftaran akan dilaksanakan secara online melaui portal PPDB Provinsi Gorontalo mulai tanggal 10 Maret hingga 25 Maret 2026.</p><p>Calon siswa diharapkan untuk mempersiapkan berkas-berkas persyaratan seperti:</p><ul><li>Fotokopi Kartu Keluarga</li><li>Surat Keterangan Lulus / Ijazah SMP</li><li>Sertifikat Prestasi (Khusus Jalur Prestasi)</li><br></ul><p>Mari bergabung menjadi bagian dari generasi penerus bangsa yang berkualitas di SMA Negeri 1 Suwawa!</p>',
        ]);

        // Artikel 2
        Article::create([
            'title' => 'Tim Robotik SMAN 1 Suwawa Lolos ke Tingkat Nasional',
            'slug' => Str::slug('Tim Robotik SMAN 1 Suwawa Lolos ke Tingkat Nasional') . '-' . (time() + 1),
            'category' => 'Prestasi',
            'date' => '2026-03-05',
            'user_id' => $admin->id,
            'content' => '<p>Prestasi membanggakan kembali diraih oleh siswa-siswi SMA Negeri 1 Suwawa. Tim Ekskul Robotik <b>"Suwawa Mechatron"</b> berhasil meraih juara pertama dalam ajang Kompetisi Robotik Regional Sulawesi yang diselenggarakan di Makassar, akhir pekan lalu.</p><p>Kemenangan ini secara otomatis membawa mereka melaju ke kompetisi tingkat Nasional yang akan diadakan di Jakarta pada bulan Mei mendatang. Kepala Sekolah, Drs. H. Ahmad Dahlan, M.Pd, menyampaikan apresiasi dan rasa bangganya atas pencapaian para siswa.</p><blockquote>"Ini adalah bukti nyata bahwa keterbatasan domisili bukan halangan untuk mencetak karya berstandar nasional. Semangat terus anak-anakku!" pesannya.</blockquote>',
        ]);

        // Artikel 3
        Article::create([
            'title' => 'Kegiatan Pesantren Kilat dan Bakti Sosial Bulan Ramadhan',
            'slug' => Str::slug('Kegiatan Pesantren Kilat dan Bakti Sosial Bulan Ramadhan') . '-' . (time() + 2),
            'category' => 'Kegiatan',
            'date' => '2026-02-28',
            'user_id' => $admin->id,
            'content' => '<p>Dalam rangka menyambut hadirnya bulan suci Ramadhan 1447 H, OSIS SMA Negeri 1 Suwawa menyelenggarakan rangkaian kegiatan edukatif dan religius berupa <i>Pesantren Kilat (Sanlat)</i> yang berlangsung selama 3 hari di lingkungan sekolah.</p><br><p>Kegiatan ini ditutup dengan acara puncak berupa Bakti Sosial berupa pembagian paket sembako ke panti asuhan dan warga sekitar wilayah kecamatan Suwawa. Kegiatan ini bertujuan memupuk rasa kepedulian sosial, keimanan, dan ketaqwaan para siswa dalam memanfaatkan momentum bulan puasa.</p>',
        ]);
        
        // Artikel 4
        Article::create([
            'title' => 'Pemilihan Ketua OSIS Masa Bakti 2026/2027 Berjalan Lancar Menggunakan e-Voting',
            'slug' => Str::slug('Pemilihan Ketua OSIS Masa Bakti 2026/2027 Berjalan Lancar') . '-' . (time() + 3),
            'category' => 'Kesiswaan',
            'date' => '2026-02-15',
            'user_id' => $admin->id,
            'content' => '<p>Pesta demokrasi pelajar ala SMA Negeri 1 Suwawa sukses digelar. Pemilihan Ketua dan Wakil Ketua OSIS periode 2026/2027 kali ini memanfaatkan sistem <i>e-voting</i> guna melatih kedisiplinan dan adaptasi literasi digital para generasi Z (Gen-Z).</p><p>Berdasarkan hasil rekapitulasi surat suara digital, Pasangan Calon (Paslon) nomor urut 2, Budi Santoso dan Rina Melati keluar sebagai ketua dan wakil ketua terpilih dengan perolehan lebih dari 60% suara sah. <b>Selamat bertugas!</b> Semoga OSIS SMA Negeri 1 Suwawa semakin maju dan mampu menjadi wadah aspirasi siswa yang produktif.</p>',
        ]);
        
        $this->command->info('Beberapa contoh artikel berhasil ditambahkan ke database!');
    }
}
