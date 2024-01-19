<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiKehadiran;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;

class absensiKehadiranController extends Controller
{
    public function index()
    {
        $absensiKehadirans = AbsensiKehadiran::latest()->paginate(10);
        return view('absensi.index', compact('absensiKehadirans'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pembayar' => 'required',
            'laporan_pembayaran' => 'required',
            'nominal_pembayaran' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
        ]);

        AbsensiKehadiran::create($request->all());

        return redirect()->route('absensi.index')->with('success', 'Absensi Kehadiran created successfully.');
    }

    public function show(AbsensiKehadiran $absensiKehadiran)
    {
        return view('absensi.show', compact('absensiKehadiran'));
    }

    public function edit(AbsensiKehadiran $absensiKehadiran)
    {
        return view('absensi.edit', compact('absensiKehadiran'));
    }

    public function update(Request $request, AbsensiKehadiran $absensiKehadiran)
    {
        $request->validate([
            'nama_pembayar' => 'required',
            'laporan_pembayaran' => 'required',
            'nominal_pembayaran' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
        ]);

        $absensiKehadiran->update($request->all());

        return redirect()->route('absensi.index')->with('success', 'Absensi Kehadiran updated successfully.');
    }

    public function destroy(AbsensiKehadiran $absensiKehadiran)
    {
        $absensiKehadiran->delete();

        return redirect()->route('absensi.index')->with('success', 'Absensi Kehadiran deleted successfully.');
    }
    public function showByDate(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $date = Carbon::parse($request->input('date'))->format('Y-m-d');

        $absensiKehadirans = AbsensiKehadiran::whereDate('tanggal_pembayaran', $date)->get();

        return view('absensi.index', compact('absensiKehadirans'));
    }

    public function generatePDF()
    {
        $absensiKehadirans = AbsensiKehadiran::all();

        $pdf = PDF::loadView('absensi.pdf', compact('absensiKehadirans'));

        return $pdf->download('absensi.pdf');
    }
}
