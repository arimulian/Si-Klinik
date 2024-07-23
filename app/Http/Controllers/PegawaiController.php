<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::query()
            ->latest()
            ->paginate(10);
        return view('pegawai.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' =>'required',
            'nip' =>'required|unique:pegawai,nip',
            'jabatan' =>'required',
            'status' =>'required',
        ]);
        Pegawai::query()
            ->create([
                'nama' => $data['nama'],
                'nip' => $data['nip'],
                'jabatan' => $data['jabatan'],
               'is_active' => $data['status'],
            ]);
        return redirect()->route('pegawai.list')
            ->with('status', 'Data pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        $data = Pegawai::query()
            ->where('id', $pegawai->id)
            ->first();
        return view('pegawai.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $data = $request->validate([
            'nama' =>'required',
            'nip' =>'required|unique:pegawai,nip,'. $pegawai->id,
            'jabatan' =>'required',
        ]);
        Pegawai::query()
            ->where('id', $pegawai->id)
            ->update([
                'nama' => $data['nama'],
                'nip' => $data['nip'],
                'jabatan' => $data['jabatan'],
                'is_active' => $request->input('status')
            ]);
        return redirect()->route('pegawai.list')
            ->with('status', 'Data pegawai berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::query()
            ->where('id', $pegawai->id)
            ->delete();
        return redirect()->route('pegawai.list')
            ->with('status', 'Data pegawai berhasil dihapus.');
    }
}
