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
        // Logika pemrosesan saat menambah barang
        // Misalnya, validasi input, penyimpanan ke database, dll.
        
        return view('barang.tambah');
    }

    public function edit($id)
    {
        // Logika pemrosesan saat mengedit barang dengan ID tertentu
        // Misalnya, mengambil data barang dari database, validasi input, penyimpanan perubahan, dll.
        
        return view('barang.edit');
    }

    public function hapus($id)
    {
        // Logika pemrosesan saat menghapus barang dengan ID tertentu
        // Misalnya, mengambil data barang dari database, validasi konfirmasi penghapusan, penghapusan data, dll.
        
        return view('barang.hapus');
    }
}
