<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Illuminate\Support\Facades\Storage;

class wargaController extends Controller
{
    public function index()
    {
        $wargas = Warga::latest()->paginate(10);
        return view('wargas.index', compact('wargas'));
    }

    public function create()
    {
        return view('wargas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_warga' => 'required',
            'nomor_kk' => 'required|unique:wargas',
            'jumlah_keluarga' => 'required|numeric',
            'alamat_rumah' => 'required',
            'pekerjaan' => 'required',
        ]);

        $imagePath = $request->file('foto_ktp')->store('public/images');

        Warga::create([
            'foto_ktp' => $imagePath,
            'nama_warga' => $request->nama_warga,
            'nomor_kk' => $request->nomor_kk,
            'jumlah_keluarga' => $request->jumlah_keluarga,
            'alamat_rumah' => $request->alamat_rumah,
            'pekerjaan' => $request->pekerjaan,
        ]);
    //   dd('$wargas');
        return redirect()->route('wargas.index')->with('success', 'Warga created successfully.');
    }

    public function show(Warga $warga)
    {
        return view('wargas.show', compact('warga'));
    }

    public function edit(Warga $warga)
    {
        return view('wargas.edit', compact('warga'));
    }

    public function update(Request $request, Warga $warga)
    {
        $request->validate([
            'nama_warga' => 'required',
            'nomor_kk' => 'required|unique:wargas,nomor_kk,' . $warga->id,
            'jumlah_keluarga' => 'required|numeric',
            'alamat_rumah' => 'required',
            'pekerjaan' => 'required',
        ]);

        // Update the Warga record
        $warga->update($request->all());

        return redirect()->route('wargas.index')->with('success', 'Warga updated successfully.');
    }

    public function destroy(Warga $warga)
    {
        Storage::delete($warga->foto_ktp);

        $warga->delete();

        return redirect()->route('wargas.index')->with('success', 'Warga deleted successfully.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $wargas = Warga::where('nama_warga', 'like', '%' . $search . '%')->paginate(10);
        return view('wargas.index', compact('wargas'));
    }
}
