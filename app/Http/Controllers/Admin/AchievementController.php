<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('achievement_year', 'desc')->orderBy('id', 'desc')->get();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'achievement_year' => 'required|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('achievements', 'public');
            $validated['image'] = $imagePath;
        }

        Achievement::create($validated);

        return redirect()->route('admin.achievements.index')->with('success', 'Data Prestasi berhasil ditambahkan.');
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'achievement_year' => 'required|string|max:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($achievement->image) {
                Storage::disk('public')->delete($achievement->image);
            }
            $imagePath = $request->file('image')->store('achievements', 'public');
            $validated['image'] = $imagePath;
        }

        $achievement->update($validated);

        return redirect()->route('admin.achievements.index')->with('success', 'Data Prestasi berhasil diperbarui.');
    }

    public function destroy(Achievement $achievement)
    {
        if ($achievement->image) {
            Storage::disk('public')->delete($achievement->image);
        }
        $achievement->delete();
        
        return redirect()->route('admin.achievements.index')->with('success', 'Data Prestasi berhasil dihapus.');
    }
}
