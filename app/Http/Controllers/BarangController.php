<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        
        return view('barang.index', ['data' => $barang]);
    }

    public function tambah()
    {
        return view('barang.tambah');
    }

    public function edit($id)
    {
        return view('barang.edit');
    }

    public function hapus($id)
    {
        return view('barang.hapus');
    }
}
