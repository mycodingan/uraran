<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluahan;
use Barryvdh\DomPDF\PDF as DomPDFPDF;


class KeluahanController extends Controller
{
    public function index()
    {
        $keluahans = Keluahan::latest()->paginate(10);
        return view('keluahans.index', compact('keluahans'));
    }

    public function create()
    {
        return view('keluahans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengeluh' => 'required',
            'judul_keluhan' => 'required',
            'isi_keluhan' => 'required',
        ]);

        Keluahan::create($request->all());

        return redirect()->route('keluahans.index')->with('success', 'Keluahan created successfully.');
    }

    public function show(Keluahan $keluhan)
    {
        return view('keluahans.show', compact('keluhan'));
    }

    public function edit(Keluahan $keluhan)
    {
        return view('keluahans.edit', compact('keluhan'));
    }

    public function update(Request $request, Keluahan $keluhan)
    {
        $request->validate([
            'nama_pengeluh' => 'required',
            'judul_keluhan' => 'required',
            'isi_keluhan' => 'required',
        ]);

        $keluhan->update($request->all());

        return redirect()->route('keluahans.index')->with('success', 'Keluahan updated successfully.');
    }

    public function destroy(Keluahan $keluhan)
    {
        $keluhan->delete();

        return redirect()->route('keluahans.index')->with('success', 'Keluahan deleted successfully.');
    }

    public function generatePDF()
    {
        $keluahans = Keluahan::all();
        $pdf = DomPDFPDF::loadView('keluahans.pdf', compact('keluahans'));

        return $pdf->download('keluahans.pdf');
    }
}
