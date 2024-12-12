@extends('layouts.apps')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Neotifikasi</h1>
        </div>

        <div class="row">

            <div class="col-lg-12">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #B99470">Data Norifikasi</h6>
                            <div>
                                <a href="{{ route('notifications.create') }}" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Add Notifikasi</span>
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
                                        <th>No Telepon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $notif)
                                        <tr>
                                            <td>{{ $notif->event->client->nama }}</td>
                                            <td>{{ \Carbon\Carbon::parse($notif->event->date)->format('d M Y') }}</td>
                                            <td>{{ $notif->event->client->no_hp }}</td>
                                            <td>
                                                <a href="{{ route('notifications.sendMessage', $notif->id) }}"
                                                    class="btn btn-success btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                    <span class="text">Kirim Pesan</span>
                                                </a>

                                                <a href="{{ route('notifications.edit', $notif->id) }}"
                                                    class="btn btn-warning btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-edit"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                </a>

                                                <a href="{{ route('notifications.destroy', $notif->id) }}"
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
