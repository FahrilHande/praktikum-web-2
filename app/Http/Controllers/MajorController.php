<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MajorController extends Controller
{
    public function index()
    {
        if (! Gate::allows('view-major')) {
            abort(401);
        }

        $majors = Majors::all();
        return view('majors.index', compact('majors'));
    }

    public function show(string $id)
    {
        if (! Gate::allows('view-major')) {
            abort(401);
        }

        $major = Majors::findOrFail($id);
        return view('majors.show', compact('major'));
    }

    public function create()
    {
        if (! Gate::allows('store-major')) {
            abort(401);
        }

        return view('majors.create');
    }

    public function store(Request $request)
    {
        if (! Gate::allows('store-major')) {
            abort(401);
        }

        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:50',
        'description' => 'nullable|string',
    ]);

        Majors::create($validated);
        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        if (! Gate::allows('edit-major')) {
            abort(401);
        }

        $major = Majors::findOrFail($id);
        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, string $id)
    {
        if (! Gate::allows('edit-major')) {
            abort(401);
        }

        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:50',
        'description' => 'nullable|string',
    ]);

        $major = Majors::findOrFail($id);
        $major->update($validated);

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-major')) {
            abort(401);
        }

        $major = Majors::findOrFail($id);
        $major->delete();

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil dihapus.');
    }
}
