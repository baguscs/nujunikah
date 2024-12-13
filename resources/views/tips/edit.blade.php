@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tips & Tricks</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Edit Data Tips & Tricks</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tips.update', $tips->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="judul" name="judul" placeholder="Masukkan judul tips & tricks"
                                        value="{{ $tips->judul }}" required>
                                </div>

                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Isi Konten</label>
                                <div class="col-sm-10">
                                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" id="" cols="30"
                                        rows="10" required>{{ $tips->isi }}</textarea>

                                    @error('isi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-sm-2 col-form-label">Thumbnail</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button"
                                                onclick="$('#thumbnailModal').modal('show')">Foto Saat Ini</button>
                                        </div>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            id="foto" name="foto" value="{{ old('foto') }}">
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="thumbnailModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Foto Tips & Tricks
                                                    {{ $tips->judul }} Saat Ini
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/tips/' . $tips->gambar) }}" class="img-fluid"
                                                    alt="Responsive image">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10 d-flex justify-content-end">
                                    <a href="{{ route('tips.index') }}" type="button"
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
