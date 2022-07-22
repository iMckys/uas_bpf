<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::latest()->paginate(10);
        return view('lokasi.index', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/lokasi', $foto->hashName());
        $lokasi = Lokasi::create([
            'nama_lokasi' => $request->nama_lokasi,
            'foto' => $foto->hashName(),
            'alamat_lokasi' => $request->alamat_lokasi,
        ]);
        if ($lokasi) {
            return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Dimasukkan']);
        } else {
            return redirect()->route('lokasi.index')->with(['error' => 'Data gagal Berhasil Dimasukkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::find($id);
        return view('lokasi.update', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lokasi = lokasi::findOrFail($id);
        if ($request->file('foto') == "") {
            $lokasi->update([
                'nama_lokasi' => $request->nama_lokasi,
                'alamat_lokasi' => $request->alamat_lokasi,

            ]);
        } else {
            Storage::disk('local')->delete('public/lokasi/' . $lokasi->foto);
            $foto = $request->file('foto');
            $foto->storeAs('public/lokasi', $foto->hashName());
            $lokasi->update([
                'nama_lokasi' => $request->nama_lokasi,
                'foto' => $foto->hashName(),
                'alamat_lokasi' => $request->alamat_lokasi,

            ]);
        }
        if ($lokasi) {
            return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Diupdate']);
        } else {
            return redirect()->route('lokasi.index')->with(['error' => 'Data Tidak Berhasil Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        Storage::disk('local')->delete('public/lokasi/' . $lokasi->foto);
        $lokasi->delete();
        if ($lokasi) {
            return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect()->route('lokasi.index')->with(['error' => 'Data gagal Berhasil Dihapus']);
        }
    }
}
