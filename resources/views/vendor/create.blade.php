@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Tambah Data Vendor</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vendors.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="name" name="nama" placeholder="Masukkan Nama"
                                        value="{{ old('nama') }}" required>
                                </div>

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                                        name="kategori" aria-label="Default select example">
                                        <option selected>Pilih Kategori Vendor</option>
                                        @foreach (App\Models\Vendor::CATEGORI as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>

                                    @error('kategori')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10 d-flex justify-content-end">
                                    <a href="{{ route('vendors.index') }}" type="button"
                                        class="btn btn-secondary me-2 mr-2">Batal</a>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
