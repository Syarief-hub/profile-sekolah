<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Storage;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::orderBy('category')->orderBy('name')->get();
        return view('admin.extracurriculars.index', compact('extracurriculars'));
    }

    public function create()
    {
        return view('admin.extracurriculars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'schedule' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('extracurriculars', 'public');
            $validated['image'] = $imagePath;
        }

        Extracurricular::create($validated);

        return redirect()->route('admin.extracurriculars.index')->with('success', 'Data Ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Extracurricular $extracurricular)
    {
        return view('admin.extracurriculars.edit', compact('extracurricular'));
    }

    public function update(Request $request, Extracurricular $extracurricular)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'schedule' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($extracurricular->image) {
                Storage::disk('public')->delete($extracurricular->image);
            }
            $imagePath = $request->file('image')->store('extracurriculars', 'public');
            $validated['image'] = $imagePath;
        }

        $extracurricular->update($validated);

        return redirect()->route('admin.extracurriculars.index')->with('success', 'Data Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Extracurricular $extracurricular)
    {
        if ($extracurricular->image) {
            Storage::disk('public')->delete($extracurricular->image);
        }
        $extracurricular->delete();
        
        return redirect()->route('admin.extracurriculars.index')->with('success', 'Data Ekstrakurikuler berhasil dihapus.');
    }
}
