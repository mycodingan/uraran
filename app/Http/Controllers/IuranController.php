<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iuran;

class IuranController extends Controller
{
    public function index()
    {
        $iurans = Iuran::latest()->paginate(10);
        $totalIuran = Iuran::sum('jumlah_iuran');
        return view('iurans.index', compact('iurans', 'totalIuran'));
    }

    public function create()
    {
        return view('iurans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengeluh' => 'required',
            'judul_keluhan' => 'required',
            'isi_keluhan' => 'required',
            'jumlah_iuran' => 'required|numeric',
        ]);

        Iuran::create($request->all());

        return redirect()->route('iurans.index')->with('success', 'Iuran created successfully.');
    }

    public function show(Iuran $iuran)
    {
        return view('iurans.show', compact('iuran'));
    }

    public function edit(Iuran $iuran)
    {
        return view('iurans.edit', compact('iuran'));
    }

    public function update(Request $request, Iuran $iuran)
    {
        $request->validate([
            'nama_pengeluh' => 'required',
            'judul_keluhan' => 'required',
            'isi_keluhan' => 'required',
            'jumlah_iuran' => 'required|numeric',
        ]);

        $iuran->update($request->all());

        return redirect()->route('iurans.index')->with('success', 'Iuran updated successfully.');
    }

    public function destroy(Iuran $iuran)
    {
        $iuran->delete();

        return redirect()->route('iurans.index')->with('success', 'Iuran deleted successfully.');
    }
}
