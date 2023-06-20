@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Barang</div>
                    <div class="card-body">
                        <a href="{{ route('barang.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no = 1)
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->kode_barang }}</td>
                                        <td>{{ $row->nama_barang }}</td>
                                        <td>{{ $row->kategori_barang }}</td>
                                        <td>{{ $row->harga }}</td>
                                        <td>{{ $row->jumlah }}</td>
                                        <td>
                                            <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
