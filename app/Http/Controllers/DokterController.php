<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dokter::query()
            ->with('user')
            ->paginate(10);
        return view('dokter.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);

        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            ]);
             Dokter::query()->create([
            'user_id' => $user->id,
            'spesialis' => $request->spesialis,
            ]);
        return redirect()->route('dokter.list')->with('status', 'Dokter berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        $data = Dokter::query()
            ->with('user')
            ->first();
        return view('dokter.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $data = $request->validate([
            'name' => 'required',
           'spesialis' => 'required',
        ]);

        $dokter->user->update([
            'name' => $data['name'],
            'email' => $dokter->user->email,
            'password' => $dokter->user->password, // No need to update password if not changed.
        ]);
        $dokter->update([
           'spesialis' => $data['spesialis'],
        ]);

        return redirect()->route('dokter.list')->with('status', 'Dokter berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        $dokter->delete();
        $dokter->user->delete();
        return redirect()->route('dokter.list')->with('status', 'Dokter berhasil dihapus');
    }
}
