<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('tabel', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_varian' => 'required',
            'qty' => 'required|integer|min:1',
            'harga_jual' => 'required|numeric|min:0',
        ]);

        $barang = Barang::create($request->all());

        $total_harga = $barang->qty * $barang->harga_jual;
        $potongan_harga = 0;

        if ($total_harga >= 500000) {
            $potongan_harga = $total_harga * 0.5;
        } else if ($total_harga >= 200000) {
            $potongan_harga = $total_harga * 0.2;
        } else if ($total_harga >= 100000) {
            $potongan_harga = $total_harga * 0.1;
        } else {
            $potongan_harga = 0;
        }
        
        $total_bayar = $total_harga - $potongan_harga;

        return view('tampil', compact('barang', 'total_harga', 'potongan_harga', 'total_bayar'));  
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('tabel');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // belum buat ini
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // belum buat juga :)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // belum buat juga, insyaallah akan ditambah
    }
}
