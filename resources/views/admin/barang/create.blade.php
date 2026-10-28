@extends('admin.layouts.app')

@section('title', 'Tambah Barang')

@section('content')
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Tambah Data Barang</h1>

    <div class="card shadow mb-4 col-md-8">
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" required placeholder="Contoh: BRG-001">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" required placeholder="Contoh: Proyektor Epson">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" required placeholder="Contoh: Elektronik">
                </div>
                <div class="form-group">
                    <label>Kondisi</label>
                    <select name="kondisi" class="form-control" required>
                        <option value="Baik">Baik</option>
                        <option value="Perbaikan">Perbaikan</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection