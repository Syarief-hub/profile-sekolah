<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            // Kelas
            ['category' => 'kelas', 'name' => 'Ruang Kelas X', 'unit' => 7, 'image' => 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang belajar untuk siswa kelas X. Dilengkapi fasilitas proyektor dan pencahayaan yang sangat baik untuk mendukung Kurikulum Merdeka.'],
            ['category' => 'kelas', 'name' => 'Ruang Kelas XI', 'unit' => 6, 'image' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang kelas representatif untuk siswa kelas XI jurusan MIPA dan IPS dengan sirkulasi udara yang nyaman.'],
            ['category' => 'kelas', 'name' => 'Ruang Kelas XII', 'unit' => 6, 'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang belajar intensif untuk kelas XII yang dikondisikan tenang dan nyaman demi persiapan ujian akhir.'],
            
            // Lab
            ['category' => 'lab', 'name' => 'LAB. Biologi', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas praktikum biologi dan anatomi dengan mikroskop.'],
            ['category' => 'lab', 'name' => 'LAB. Kimia', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas praktikum reaksi kimia dasar dan eksperimen.'],
            ['category' => 'lab', 'name' => 'LAB. Fisika', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1507413245164-6160d8298b31?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas praktikum fisika, mekanika, dan elektronika.'],
            ['category' => 'lab', 'name' => 'LAB. Bahasa', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=400&auto=format&fit=crop', 'description' => 'Laboratorium bahasa dilengkapi perangkat audio multimedia.'],
            ['category' => 'lab', 'name' => 'Ruang Komputer', 'unit' => 2, 'image' => 'https://images.unsplash.com/photo-1547394765-185e1e68f34e?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas TIK dan ruang pelaksanaan ujian berbasis komputer.'],

            // Perpus
            ['category' => 'perpus', 'name' => 'Area Koleksi Buku', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=400&auto=format&fit=crop', 'description' => 'Pusat penyimpanan ribuan koleksi buku pelajaran, literatur, dan ensiklopedia.'],
            ['category' => 'perpus', 'name' => 'Ruang Baca Nyaman', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=400&auto=format&fit=crop', 'description' => 'Area membaca yang tenang, dilengkapi meja bundar dan kursi ergonomis untuk fokus belajar.'],
            ['category' => 'perpus', 'name' => 'Pojok Digital / PC', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas komputer dengan koneksi internet untuk pencarian e-book dan tugas sekolah.'],

            // Olahraga
            ['category' => 'olahraga', 'name' => 'Lapangan Basket & Voli', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1526232761682-d26e03ac148e?q=80&w=400&auto=format&fit=crop', 'description' => 'Lapangan multifungsi outdoor standar untuk kegiatan olahraga dan ekstrakurikuler.'],
            ['category' => 'olahraga', 'name' => 'Lapangan Futsal', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=400&auto=format&fit=crop', 'description' => 'Area lapangan olahraga yang luas sering digunakan untuk pertandingan futsal sekolah.'],
            ['category' => 'olahraga', 'name' => 'Ruang Seni & Keterampilan', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=400&auto=format&fit=crop', 'description' => 'Studio khusus untuk praktik seni rupa, bermusik, dan persiapan pentas budaya.'],

            // Ibadah
            ['category' => 'ibadah', 'name' => 'Ruang Sholat Utama', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1564769625905-50e93615e769?q=80&w=400&auto=format&fit=crop', 'description' => 'Tempat ibadah yang luas, bersih, dan sejuk, menampung seluruh warga sekolah.'],
            ['category' => 'ibadah', 'name' => 'Tempat Wudhu Putra', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas bersuci khusus putra dengan sistem sanitasi yang dijaga kebersihannya.'],
            ['category' => 'ibadah', 'name' => 'Tempat Wudhu Putri', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas bersuci khusus putri yang tertutup dan terpisah untuk kenyamanan ibadah.'],

            // Aula
            ['category' => 'aula', 'name' => 'Area Duduk Peserta', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=400&auto=format&fit=crop', 'description' => 'Kapasitas besar untuk menampung ratusan audiens saat seminar atau rapat komite.'],
            ['category' => 'aula', 'name' => 'Panggung (Stage)', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=400&auto=format&fit=crop', 'description' => 'Panggung permanen yang cukup lebar lengkap dengan sistem audio visual.'],
            ['category' => 'aula', 'name' => 'Ruang Transit', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1590402494587-44b71d7772f6?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang khusus di belakang panggung untuk persiapan pengisi acara atau tamu kehormatan.'],

            // Admin
            ['category' => 'admin', 'name' => 'Ruang Kepala Sekolah', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang kerja, koordinasi, dan penerimaan tamu pimpinan.'],
            ['category' => 'admin', 'name' => 'Ruang Wakasek', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang kerja para wakil kepala sekolah urusan kurikulum, kesiswaan, dll.'],
            ['category' => 'admin', 'name' => 'Ruang Dewan Guru', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang meja kerja, persiapan mengajar dan istirahat para guru.'],
            ['category' => 'admin', 'name' => 'Ruang Tata Usaha', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1616423640778-28d1b53229bd?q=80&w=400&auto=format&fit=crop', 'description' => 'Pusat pelayanan administrasi sekolah dan operasional staf TU.'],

            // Layanan
            ['category' => 'layanan', 'name' => 'Ruang BK/BP', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang konsultasi psikologis dan bimbingan konseling siswa.'],
            ['category' => 'layanan', 'name' => 'Ruang UKS', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1581056771107-24ca5f033842?q=80&w=400&auto=format&fit=crop', 'description' => 'Unit Kesehatan Sekolah untuk pertolongan pertama pada kecelakaan.'],
            ['category' => 'layanan', 'name' => 'Ruang Koperasi', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1534723452862-4c874018d66d?q=80&w=400&auto=format&fit=crop', 'description' => 'Koperasi kesiswaan dan penyediaan atribut/alat tulis sekolah.'],
            ['category' => 'layanan', 'name' => 'Ruang OSIS', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=400&auto=format&fit=crop', 'description' => 'Sekretariat tempat rapat dan perencanaan program pengurus OSIS.'],
            ['category' => 'layanan', 'name' => 'Ruang PMR', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=400&auto=format&fit=crop', 'description' => 'Sekretariat Palang Merah Remaja sekolah.'],

            // Umum
            ['category' => 'umum', 'name' => 'Kamar Mandi Guru (L)', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas sanitasi khusus staf & guru laki-laki.'],
            ['category' => 'umum', 'name' => 'Kamar Mandi Guru (P)', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1620626011761-996317b8d101?q=80&w=400&auto=format&fit=crop', 'description' => 'Fasilitas sanitasi khusus staf & guru perempuan.'],
            ['category' => 'umum', 'name' => 'Kamar Mandi Siswa (L)', 'unit' => 3, 'image' => 'https://images.unsplash.com/photo-1564540574859-0dfb63985953?q=80&w=400&auto=format&fit=crop', 'description' => 'Toilet dan tempat wudhu khusus siswa laki-laki.'],
            ['category' => 'umum', 'name' => 'Kamar Mandi Siswa (P)', 'unit' => 3, 'image' => 'https://images.unsplash.com/photo-1552872673-9b7b99711ebb?q=80&w=400&auto=format&fit=crop', 'description' => 'Toilet dan tempat wudhu khusus siswi perempuan.'],
            ['category' => 'umum', 'name' => 'Gudang', 'unit' => 1, 'image' => 'https://images.unsplash.com/photo-1586528116311-ad8ed7c1590f?q=80&w=400&auto=format&fit=crop', 'description' => 'Ruang penyimpanan perlengkapan dan logistik sekolah.']
        ];

        foreach ($facilities as $facility) {
            \App\Models\Facility::create($facility);
        }
    }
}
