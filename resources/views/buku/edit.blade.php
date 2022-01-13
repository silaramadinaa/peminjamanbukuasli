@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Kode Register</label>
                                <input type="text" name="id_register" value="{{ $buku->id_register }}"
                                    class="form-control @error('id_register') is-invalid @enderror">
                                @error('id_register')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Judul Buku</label>
                                <input type="text" name="nama" value="{{ $buku->nama }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Pengarang</label>
                                <input type="text" name="pengarang" value="{{ $buku->pengarang }}"
                                    class="form-control @error('pengarang') is-invalid @enderror">
                                @error('pengarang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" name="penerbit" value="{{ $buku->penerbit }}"
                                    class="form-control @error('penerbit') is-invalid @enderror">
                                @error('penerbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan Tahun Terbit</label>
                                <input type="date" name="thn_terbit" value="{{ $buku->thn_terbit }}"
                                    class="form-control @error('thn_terbit') is-invalid @enderror">
                                @error('thn_terbit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan cover</label>
                                <br>
                                <img src="{{ $buku->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="cover" value="{{ $buku->cover }}" class="form-control @error('cover') is-invalid @enderror">

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
