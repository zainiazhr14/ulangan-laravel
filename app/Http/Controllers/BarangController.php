<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Testing\Fakes\BusFake;

class BarangController extends Controller
{
    //
    public function index()
    {
        $batas = 5;
        $data_barang = Barang::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($data_barang->currentPage() - 1);
        return view('barang.index', compact('data_barang', 'no'));
    }
    public function tambah() {
        return view('barang.tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            "nama" => "required|string",
            "jumlah" => "required|integer",
            "satuan" => "required|string"
        ]);

        $barang = new Barang();
        $barang->nama = $request->nama;
        $barang->jumlah = $request->jumlah;
        $barang->satuan = $request->satuan;
        $barang->save();

        return redirect('/barang')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function hapus($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barang')->with('pesan','Data Berhasil Dihapus');
    }
    public function edit($id)
    {
        $barang = Barang::find($id);

        return view('barang.edit', compact('barang'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "nama" => "required|string",
            "jumlah" => "required|integer",
            "satuan" => "required|string"
        ]);
        
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->jumlah = $request->jumlah;
        $barang->satuan = $request->satuan;
        $barang->update();

        return redirect('/barang')->with('pesan','Data Berhasil Diubah');
    }
    public function cari(Request $request)
    {
        $batas = 5;
        $cari = $request->cari;
        $data_barang = Barang::where('nama', 'like', '%'.$cari.'%')
                        ->paginate($batas);
        $no = $batas * ($data_barang->currentPage() - 1);
        return view('barang.cari', compact('data_barang', 'no'));
    }
}
