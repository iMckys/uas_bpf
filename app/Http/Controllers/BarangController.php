<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::latest()->paginate(10);
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = Barang::create([
            'nama_barang' => $request->nama_barang,
            'toko' => $request->toko,
            'jenis_barang' => $request->jenis_barang,
            'harga' => $request->harga,
        ]);
        if ($barang) {
            return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dimasukkan']);
        } else {
            return redirect()->route('barang.index')->with(['error' => 'Data gagal Berhasil Dimasukkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.update', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
            $barang->update([
                'nama_barang' => $request->nama_barang,
                'toko' => $request->toko,
                'jenis_barang' => $request->jenis_barang,
                'harga' => $request->harga,
            ]);
        if ($barang) {
            return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diupdate']);
        } else {
            return redirect()->route('barang.index')->with(['error' => 'Data Tidak Berhasil Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        Storage::disk('local')->delete('public/barang/' . $barang->foto);
        $barang->delete();
        if ($barang) {
            return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect()->route('barang.index')->with(['error' => 'Data gagal Berhasil Dihapus']);
        }
    }
}
