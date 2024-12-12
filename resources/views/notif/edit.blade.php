@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Notifikasi</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Edit Data Notifikasi</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notifications.update', $notification->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="client" class="col-sm-2 col-form-label">Nama Client</label>
                                <div class="col-sm-10">
                                    <select class="form-control @error('client') is-invalid @enderror" id="client"
                                        name="client" aria-label="Default select example">
                                        <option selected>Pilih Nama Client</option>
                                        @foreach ($events as $event)
                                            <option value="{{ $event->id }}"
                                                @if ($event->id == $notification->event_id) selected @endif>
                                                {{ $event->client->nama }}</option>
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
                                <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                                <div class="col-sm-10">
                                    <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" id="pesan" cols="30"
                                        rows="10">{{ $notification->pesan }}</textarea>

                                    @error('pesan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Link File</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('file') is-invalid @enderror"
                                        id="file" name="file" value="{{ $notification->file }}">

                                    @error('file')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10 d-flex justify-content-end">
                                    <a href="{{ route('notifications.index') }}" type="button"
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
        });
    </script>
@endpush
