<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationMemberController extends Controller
{
    public function index()
    {
        $members = OrganizationMember::orderBy('category')->orderBy('order')->get();
        return view('admin.organization_members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.organization_members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'category' => 'required|in:Pimpinan,Wakil,Staf',
            'photo' => 'nullable|image|max:2048',
            'order' => 'nullable|integer'
        ]);

        if (!isset($validated['order'])) {
            $validated['order'] = 0;
        }

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('organization', 'public');
        }

        OrganizationMember::create($validated);

        return redirect()->route('admin.organization-members.index')->with('success', 'Anggota organisasi berhasil ditambahkan.');
    }

    public function edit(OrganizationMember $organizationMember)
    {
        return view('admin.organization_members.edit', compact('organizationMember'));
    }

    public function update(Request $request, OrganizationMember $organizationMember)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'category' => 'required|in:Pimpinan,Wakil,Staf',
            'photo' => 'nullable|image|max:2048',
            'order' => 'nullable|integer'
        ]);

        if (!isset($validated['order'])) {
            $validated['order'] = 0;
        }

        if ($request->hasFile('photo')) {
            if ($organizationMember->photo) {
                Storage::disk('public')->delete($organizationMember->photo);
            }
            $validated['photo'] = $request->file('photo')->store('organization', 'public');
        }

        $organizationMember->update($validated);

        return redirect()->route('admin.organization-members.index')->with('success', 'Anggota organisasi berhasil diperbarui.');
    }

    public function destroy(OrganizationMember $organizationMember)
    {
        if ($organizationMember->photo) {
            Storage::disk('public')->delete($organizationMember->photo);
        }
        $organizationMember->delete();

        return redirect()->route('admin.organization-members.index')->with('success', 'Anggota organisasi berhasil dihapus.');
    }
}
