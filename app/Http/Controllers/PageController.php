<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\Achievement;

class PageController extends Controller
{
    public function guruStaf()
    {
        $pimpinan = Employee::where('type', 'Pimpinan')->orderBy('order_number')->get();
        $gurus = Employee::where('type', 'Guru')->orderBy('order_number')->get();
        $stafs = Employee::where('type', 'Staf')->orderBy('order_number')->get();

        return view('akademik.guru-staf', compact('pimpinan', 'gurus', 'stafs'));
    }

    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Extracurricular::orderBy('category')->orderBy('name')->get();
        return view('kesiswaan.ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function prestasi()
    {
        $achievements = Achievement::orderBy('achievement_year', 'desc')->orderBy('id', 'desc')->get();
        return view('kesiswaan.prestasi', compact('achievements'));
    }
}
