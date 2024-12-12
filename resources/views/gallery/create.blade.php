@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Galleri</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Tambah Data Galleri</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="client" class="col-sm-2 col-form-label">Nama Client</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('client') is-invalid @enderror" id="client"
                                        name="client" aria-label="Default select example">
                                        <option selected>Pilih Nama Client</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->client->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('client')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-sm-2 col-form-label">Foto Acara</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        id="foto" name="foto" value="{{ old('foto') }}">

                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            {{-- <div class="sidebar-heading">
                                Detail Foto Event
                            </div>
                            <hr class="sidebar-divider">
                            <div class="form-group row" id="inputForm">
                                <label for="photos" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="addForm">Tambah</button>
                                            <button class="btn btn-outline-danger" type="button"
                                                id="deleteForm">Hapus</button>
                                        </div>
                                        <input type="file" class="form-control @error('photos') is-invalid @enderror"
                                            id="photos" name="photos[]" aria-label="Upload" multiple>
                                    </div>

                                    @error('photos')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- <div id="newForm"></div> --}}

                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10 d-flex justify-content-end">
                                    <a href="{{ route('galleries.index') }}" type="button"
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
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#client').select2();

            $("#addForm").click(function() {
                $("#newForm").append(
                    '<div class="form-group row mt-3"><div class="col-sm-10 offset-sm-2"><input type="file" class="form-control @error('photos') is-invalid @enderror" name="photos[]" aria-label="Upload" multiple></div></div>'
                );
            });

            $("#deleteForm").click(function() {
                $("#newForm .form-group.row").last().remove();
            });
        });
    </script>
@endpush
