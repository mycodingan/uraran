<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InformasiNotification;
use Illuminate\Support\Facades\Storage; 

class informasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::latest()->paginate(10);
        return view('informasis.index', compact('informasis'));
    }

    public function create()
    {
        return view('informasis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'gambar_informasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul_informasi' => 'required',
            'isi_informasi' => 'required',
        ]);
        $imagePath = $request->file('gambar_informasi')->store('public/images');

        $informasi = Informasi::create([
            'nama_pengirim' => $request->nama_pengirim,
            'gambar_informasi' => $imagePath,
            'judul_informasi' => $request->judul_informasi,
            'isi_informasi' => $request->isi_informasi,
        ]);
        $this->sendNotification($informasi);

        return redirect()->route('informasis.index')->with('success', 'Informasi created successfully.');
    }

    public function show(Informasi $informasi)
    {
        return view('informasis.show', compact('informasi'));
    }

    public function edit(Informasi $informasi)
    {
        return view('informasis.edit', compact('informasi'));
    }

    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'judul_informasi' => 'required',
            'isi_informasi' => 'required',
        ]);
        $informasi->update([
            'nama_pengirim' => $request->nama_pengirim,
            'judul_informasi' => $request->judul_informasi,
            'isi_informasi' => $request->isi_informasi,
        ]);

        return redirect()->route('informasis.index')->with('success', 'Informasi updated successfully.');
    }

    public function destroy(Informasi $informasi)
    {
        Storage::delete($informasi->gambar_informasi);
        $informasi->delete();

        return redirect()->route('informasis.index')->with('success', 'Informasi deleted successfully.');
    }

    private function sendNotification(Informasi $informasi)
    {
        $users = User::all();
        Notification::send($users, new InformasiNotification($informasi));
        }

    public function showByDate(Request $request)
    {
        $date = $request->input('date');
        
        $informasis = Informasi::whereDate('created_at', $date)->get();

        return view('informasis.index', compact('informasis'));
    }
}
