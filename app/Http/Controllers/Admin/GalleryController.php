<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = \App\Models\Gallery::latest()->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:photo,video',
            'url' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,mov|max:10240', // 10MB max
        ]);

        if ($request->hasFile('url')) {
            $validated['url'] = $request->file('url')->store('galleries', 'public');
        }

        Gallery::create($validated);

        return redirect()->route('admin.galleries.index')->with('success', 'Media berhasil ditambahkan ke Galeri.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'event_name' => 'required|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:photo,video',
            'url' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov|max:10240', // 10MB max, optional when editing
        ]);

        if ($request->hasFile('url')) {
            // Delete old media
            if ($gallery->url) {
                Storage::disk('public')->delete($gallery->url);
            }
            $validated['url'] = $request->file('url')->store('galleries', 'public');
        }

        $gallery->update($validated);

        return redirect()->route('admin.galleries.index')->with('success', 'Media galeri berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->url) {
            Storage::disk('public')->delete($gallery->url);
        }
        
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Media galeri berhasil dihapus.');
    }
}
