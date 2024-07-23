<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Obat::query()
            ->latest()
            ->paginate(10);
        return view('obat.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);
        Obat::query()
            ->create([
                'nama_obat'=> $data['name']
            ]);
        return redirect()->route('obat.list')->with('status', 'Obat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        $data = Obat::query()
            ->where('id', $obat->id)
            ->first();
        return view('obat.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $data = $request->validate([
            'name' => ['required']
        ]);
        Obat::query()
            ->where('id', $obat->id)
            ->update([
                'nama_obat'=> $data['name']
            ]);
        return redirect()->route('obat.list')->with('status', 'Obat berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        Obat::query()
            ->where('id', $obat->id)
            ->delete();
        return redirect()->route('obat.list')->with('status', 'Obat berhasil dihapus');
    }
}
