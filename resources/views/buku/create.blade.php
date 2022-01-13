@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Kode register buku</label>
                                <input type="text" name="id_register"
                                    class="form-control @error('id_register') is-invalid @enderror">
                                @error('id_register')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan judul buku</label>
                                <input type="text" name="judul"
                                    class="form-control @error('judul') is-invalid @enderror">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan Nama Pengarang</label>
                                <input type="text" name="pengarang"
                                    class="form-control @error('pengarang') is-invalid @enderror">
                                @error('pengarang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan penerbit</label>
                                <input type="text" name="penerbit"
                                    class="form-control @error('penerbit') is-invalid @enderror">
                                @error('penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan tahun penerbit</label>
                                <input type="date" name="thn_terbit"
                                    class="form-control @error('thn_terbit') is-invalid @enderror">
                                @error('thn_terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan cover</label>
                                <input type="file" name="cover"  class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
