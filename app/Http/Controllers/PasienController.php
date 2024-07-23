<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pasien::query()
            ->latest()
            ->paginate(10);
        return view('pasien.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'gender' => ['required'],
            'age' => ['required'],
        ]);
        Pasien::query()
            ->create([
                'nama' => $data['name'],
                'kelamin' => $data['gender'],
                'umur' => $data['age'],
            ]);
        return redirect()->route('pasien.list')
            ->with('status', 'Data pasien berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $data = Pasien::query()
            ->where('id', '=', $pasien->id)
            ->first();
        return view('pasien.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $data = $request->validate([
            'name' => ['required'],
            'gender' => ['required'],
            'age' => ['required'],
        ]);
        Pasien::query()
            ->where('id', '=', $pasien->id)
            ->update([
                'nama' => $data['name'],
                'kelamin' => $data['gender'],
                'umur' => $data['age'],
            ]);
        return redirect()->route('pasien.list')
            ->with('status', 'Data pasien berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        Pasien::query()
            ->where('id', '=', $pasien->id)
            ->delete();
        return redirect()->route('pasien.list')
            ->with('status', 'Data pasien berhasil dihapus.');
    }
}
