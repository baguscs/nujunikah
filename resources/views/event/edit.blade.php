@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Event</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Edit Data Event</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="sidebar-heading">
                            Data Client
                        </div>
                        <hr class="sidebar-divider">
                        <form action="{{ route('events.update', $client->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="name" name="nama" placeholder="Masukkan Nama"
                                        value="{{ $client->nama }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" placeholder="Masukkan Alamat"
                                        value="{{ $client->alamat }}" required>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_hp" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" placeholder="Masukkan No Telepon"
                                        value="{{ $client->no_hp }}" required>
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_hp" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Masukkan Email"
                                        value="{{ $client->email }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="sidebar-heading">
                                Data Event
                            </div>
                            <hr class="sidebar-divider">
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label">Tanggal Pelaksanaan</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control @error('date') is-invalid @enderror"
                                        id="date" name="date" value="{{ $event->date }}" required>
                                    @error('date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="budget" class="col-sm-2 col-form-label">Budget</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('budget') is-invalid @enderror"
                                        id="budget" name="budget" placeholder="Masukkan Budget"
                                        value="{{ $event->budget }}" required>
                                    @error('budget')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                                <div class="col-sm-10">
                                    <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" id="pesan" cols="30"
                                        rows="3" placeholder="Masukkan Pesan" required>{{ $event->pesan }}</textarea>
                                    @error('pesan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="sidebar-heading">
                                Pilihan Vendor
                            </div>
                            <hr class="sidebar-divider">
                            <div class="form-group row">
                                <label for="pesan" class="col-sm-2 col-form-label">Vanue</label>
                                <div class="col-sm-10">
                                    <select name="vanue" class="form-control @error('vanue') is-invalid @enderror"
                                        id="vanue" required>
                                        <option value="">Pilih Vanue</option>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor->kategori == App\Models\Vendor::CATEGORI_VANUE)
                                                <option value="{{ $vendor->id }}"
                                                    @if ($vendor->id == $vendor_event[0]) selected @endif>{{ $vendor->nama }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('vanue')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="catering" class="col-sm-2 col-form-label">Catering</label>
                                <div class="col-sm-10">
                                    <select name="catering" class="form-control @error('catering') is-invalid @enderror"
                                        id="catering" required>
                                        <option value="">Pilih catering</option>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor->kategori == App\Models\Vendor::CATEGORI_CATERING)
                                                <option value="{{ $vendor->id }}"
                                                    @if ($vendor->id == $vendor_event[1]) selected @endif>{{ $vendor->nama }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('catering')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="decoration" class="col-sm-2 col-form-label">Decoration</label>
                                <div class="col-sm-10">
                                    <select name="decoration"
                                        class="form-control @error('decoration') is-invalid @enderror" id="decoration"
                                        required>
                                        <option value="">Pilih decoration</option>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor->kategori == App\Models\Vendor::CATEGORI_DECORATION)
                                                <option value="{{ $vendor->id }}"
                                                    @if ($vendor->id == $vendor_event[2]) selected @endif>{{ $vendor->nama }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('decoration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="photo" class="col-sm-2 col-form-label">Photo & Video</label>
                                <div class="col-sm-10">
                                    <select name="photo" class="form-control @error('photo') is-invalid @enderror"
                                        id="photo" required>
                                        <option value="">Pilih photo & video</option>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor->kategori == App\Models\Vendor::CATEGORI_PHOTO_AND_VIDEO)
                                                <option value="{{ $vendor->id }}"
                                                    @if ($vendor->id == $vendor_event[3]) selected @endif>{{ $vendor->nama }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mua" class="col-sm-2 col-form-label">MUA & Attire</label>
                                <div class="col-sm-10">
                                    <select name="mua" class="form-control @error('mua') is-invalid @enderror"
                                        id="mua" required>
                                        <option value="">Pilih mua & attire</option>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor->kategori == App\Models\Vendor::CATEGORI_MUA)
                                                <option value="{{ $vendor->id }}"
                                                    @if ($vendor->id == $vendor_event[4]) selected @endif>{{ $vendor->nama }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('mua')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="entertainment" class="col-sm-2 col-form-label">Entertainment</label>
                                <div class="col-sm-10">
                                    <select name="entertainment"
                                        class="form-control @error('entertainment') is-invalid @enderror"
                                        id="entertainment" required>
                                        <option value="">Pilih entertainment</option>
                                        @foreach ($vendors as $vendor)
                                            @if ($vendor->kategori == App\Models\Vendor::CATEGORI_ENTERTAINMENT)
                                                <option value="{{ $vendor->id }}"
                                                    @if ($vendor->id == $vendor_event[5]) selected @endif>{{ $vendor->nama }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('entertainment')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10 d-flex justify-content-end">
                                    <a href="{{ route('events.index') }}" type="button"
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
            $('#vanue').select2();
            $('#catering').select2();
            $('#decoration').select2();
            $('#photo').select2();
            $('#mua').select2();
            $('#entertainment').select2();
        });
    </script>
@endpush
