<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('type')->orderBy('order_number')->get();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:Pimpinan,Guru,Staf',
            'position' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order_number' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('employees', 'public');
            $validated['image'] = $imagePath;
        }

        Employee::create($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Data guru/staf berhasil ditambahkan.');
    }

    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:Pimpinan,Guru,Staf',
            'position' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order_number' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }
            $imagePath = $request->file('image')->store('employees', 'public');
            $validated['image'] = $imagePath;
        }

        $employee->update($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Data guru/staf berhasil diperbarui.');
    }

    public function destroy(Employee $employee)
    {
        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
        }
        $employee->delete();
        
        return redirect()->route('admin.employees.index')->with('success', 'Data guru/staf berhasil dihapus.');
    }
}
