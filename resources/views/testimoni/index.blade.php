@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Testimoni</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Data Tesimoni</h6>
                            <div>
                                <a href="{{ route('testimonials.create') }}" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Add Testimoni</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Client</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Ulasan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimoni)
                                        <tr>
                                            <td>{{ $testimoni->event->client->nama }}</td>
                                            <td>{{ \Carbon\Carbon::parse($testimoni->event->date)->format('d M Y') }}</td>
                                            <td>{{ Str::limit($testimoni->ulasan, 20) }}</td>
                                            <td>
                                                <a href="{{ route('testimonials.edit', $testimoni->id) }}"
                                                    class="btn btn-warning btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                </a>

                                                <a href="{{ route('testimonials.destroy', $testimoni->id) }}"
                                                    class="btn btn-danger" data-confirm-delete="true"><span
                                                        class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Delete</span></a>
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
    </div>
@endsection
