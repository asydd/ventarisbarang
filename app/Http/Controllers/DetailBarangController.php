<?php
namespace App\Http\Controllers;

use App\Models\DetailBarang;
use Illuminate\Http\Request;

class DetailBarangController extends Controller
{
    public function index()
    {
        $data = DetailBarang::latest()->paginate(10);
        return view('pages.detail_barang.index', compact('data'));
    }

    public function create()
    {
        return view('pages.detail_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'plat_nomor' => 'nullable',
            'warna' => 'required',
            'status_barang' => 'required',
            'kondisi_barang' => 'required',
            'lokasi' => 'required',
            'tanggal_penerimaan' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        DetailBarang::create($request->all());

        return redirect()->route('pages.detail_barang.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $detail = DetailBarang::findOrFail($id);
        return view('pages.detail_barang.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merk' => 'required',
            'plat_nomor' => 'nullable',
            'warna' => 'required',
            'status_barang' => 'required',
            'kondisi_barang' => 'required',
            'lokasi' => 'required',
            'tanggal_penerimaan' => 'required|date',
            'keterangan' => 'nullable',
        ]);

        $detail = DetailBarang::findOrFail($id);
        $detail->update($request->all());

        return redirect()->route('detail_barang.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $detail = DetailBarang::findOrFail($id);
        $detail->delete();

        return redirect()->route('detail_barang.index')->with('success', 'Data berhasil dihapus.');
    }
}
