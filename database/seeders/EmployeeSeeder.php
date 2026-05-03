<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Employee::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $gurus = [
            ['name' => 'Leni Natole, M.Pd', 'position' => 'Guru Kimia', 'type' => 'guru'],
            ['name' => 'Dra. Mercy A. Karwur', 'position' => 'Guru Fisika', 'type' => 'guru'],
            ['name' => 'Sarman Ktayi, M.Pd', 'position' => 'Guru Sosiologi', 'type' => 'guru'],
            ['name' => 'Dra. Utjin Nento', 'position' => 'Guru BK', 'type' => 'guru'],
            ['name' => 'Rosna Ente, S.Pd', 'position' => 'Guru Fisika', 'type' => 'guru'],
            ['name' => 'Yularni Abdul, S.Pd', 'position' => 'Guru Kimia', 'type' => 'guru'],
            ['name' => 'Apelia Potutu, S.Pd', 'position' => 'Guru Bahasa Inggris', 'type' => 'guru'],
            ['name' => 'Irmiyanti S. Labadjo, S.Pd', 'position' => 'Guru Matematika', 'type' => 'guru'],
            ['name' => 'Dian A. Koenadji, S.Pd', 'position' => 'Guru Seni Budaya', 'type' => 'guru'],
            ['name' => 'Iyon Hasan, S.Pd', 'position' => 'Guru Penjas', 'type' => 'guru'],
            ['name' => 'Hasna Abdan, M.Pd', 'position' => 'Guru Biologi', 'type' => 'guru'],
            ['name' => 'Fatmawati Hadju, S.Pd', 'position' => 'Guru Bahasa Indonesia', 'type' => 'guru'],
            ['name' => 'Siti Ewin Yunus, S.Pd', 'position' => 'Guru Bahasa Inggris', 'type' => 'guru'],
            ['name' => 'Lastin Stama, S.Pd, M.Pd', 'position' => 'Guru Bahasa Indonesia', 'type' => 'guru'],
            ['name' => 'Syafiani Madina, M.Pd', 'position' => 'Guru Mulok', 'type' => 'guru'],
            ['name' => 'Wirda Hasan, S.Pd', 'position' => 'Guru Ekonomi', 'type' => 'guru'],
            ['name' => 'Herlin Talango, S.Pd', 'position' => 'Guru Biologi/TIK', 'type' => 'guru'],
            ['name' => 'John Hendri Purba, S.Pd, MH', 'position' => 'Guru Bahasa Indonesia', 'type' => 'guru'],
            ['name' => 'Nurlaila Ahmad, M.Pd', 'position' => 'Guru PPKn', 'type' => 'guru'],
            ['name' => 'Ansyrani Juliana, S.Pd', 'position' => 'Guru Matematika', 'type' => 'guru'],
            ['name' => 'Syukrin Djama, SE', 'position' => 'Guru Ekonomi', 'type' => 'guru'],
            ['name' => 'Moh. Faisal Rachman, S.Pd Gr', 'position' => 'Guru Geografi', 'type' => 'guru'],
            ['name' => 'Syamsu Mayang, S.Pd Gr', 'position' => 'Guru Matematika', 'type' => 'guru'],
            ['name' => 'Rahmiyati Nasaru, M.Pd', 'position' => 'Guru Kimia', 'type' => 'guru'],
            ['name' => 'Riswan Amu, S.Pd', 'position' => 'Guru Penjas', 'type' => 'guru'],
            ['name' => 'Rostin Abdullah, S.Pd', 'position' => 'Guru Geografi', 'type' => 'guru'],
            ['name' => 'Lisa Aggraini, S.Pd', 'position' => 'Guru Agama', 'type' => 'guru'],
            ['name' => 'Rizkia Djafar, S.Pd', 'position' => 'Guru Matematika', 'type' => 'guru'],
            ['name' => 'Liawati Pakana, S.Pd', 'position' => 'Guru PPKn', 'type' => 'guru'],
            ['name' => 'Amir Umar, S.Pd', 'position' => 'Guru Ekonomi', 'type' => 'guru'],
            ['name' => 'Rinto Age, S.Pd', 'position' => 'Guru Ekonomi', 'type' => 'guru'],
            ['name' => 'Rahmat Fadli Amay, M.Pd', 'position' => 'Guru Ekonomi', 'type' => 'guru'],
            ['name' => 'Ernovia J Hatta, S.Pd', 'position' => 'Guru PAI', 'type' => 'guru'],
            ['name' => 'Nurmayanti M. Dehiyo, S.Pd', 'position' => 'Guru Bahasa Indonesia', 'type' => 'guru'],
            ['name' => 'Winda O Lamangida, M.Pd', 'position' => 'Guru Fisika', 'type' => 'guru'],
            ['name' => 'Alviati Usulana, S.Pd', 'position' => 'Guru Sejarah', 'type' => 'guru'],
            ['name' => 'Shelia Priatmi, S.Pd', 'position' => 'Guru Geografi', 'type' => 'guru'],
            ['name' => 'Nelviana Junus, S.Pd', 'position' => 'Guru BK', 'type' => 'guru'],
            ['name' => 'Faniati Wartabone, S.Pd', 'position' => 'Guru BK', 'type' => 'guru'],
            ['name' => 'Ansar Pakaya, S.Pd', 'position' => 'Guru Penjas', 'type' => 'guru'],
            ['name' => 'Siskawati Hermin, S.Pd', 'position' => 'Guru Biologi', 'type' => 'guru'],
        ];

        $stafs = [
            ['name' => 'Yunita Gaib', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Isnawati Sawali, S.Kom', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Susanti Ente, S.Pd', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Sri Agustina Alamtaha, A.Md', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Haira Ahmad, A.Ma.Pd', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Lisa Umar', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Ferawati Bakir, S.H', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Gusmayun Podungga, S.AP', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Delsiana Abdullah, S.Pd', 'position' => 'Staf Tata Usaha', 'type' => 'staf'],
            ['name' => 'Periani Gani, A.Md PT', 'position' => 'Satpam', 'type' => 'staf'],
            ['name' => 'Rustam Laudji', 'position' => 'Petugas Kebersihan', 'type' => 'staf'],
        ];

        $order = 1;
        foreach ($gurus as $guru) {
            Employee::create([
                'name' => $guru['name'],
                'position' => $guru['position'],
                'type' => $guru['type'],
                'order_number' => $order++,
            ]);
        }

        foreach ($stafs as $staf) {
            Employee::create([
                'name' => $staf['name'],
                'position' => $staf['position'],
                'type' => $staf['type'],
                'order_number' => $order++,
            ]);
        }
    }
}
