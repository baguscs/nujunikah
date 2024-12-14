@extends('landing.apps')

@section('content')
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="" width="90"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link" aria-current="page" href="{{ route('landing') }}">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('landing') }}">Vendor</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('landing') }}">Gallery</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="{{ route('landing') }}">Testimonial</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link active" href="javascript:void(0);">Tips & Tricks</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('login') }}" class="btn btn-outline-success" type="button"
                style="font-size: 20px; background-color: #5F6F52; color: #ffffff; border-color: #5F6F52; boder-radius: 30px">Login</a>
        </div>
    </nav>
    <div class="card">
        <img src="{{ asset('images/hero_tips.jpg') }}" class="card-img" alt="..." style="height: 650px">
        <div class="card-img-overlay align-items-center">
            <div class="position-absolute top-50 start-50 translate-middle">
            </div>
        </div>
    </div>
    <div class="container">
        <p class="playfair-display text-center mt-5 fw-bold" style="color: #5F6F52; font-size: 40px">Tips & Tricks
        </p>

        @foreach ($tips as $item)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/tips/' . $item->gambar) }}" class="img-fluid rounded-start"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ Str::limit($item->isi, 200) }}</p>
                            <p class="card-text"><small
                                    class="text-body-secondary">{{ $item->updated_at->diffForHumans() }}</small></p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $item->id }}">
                                Lihat Selengkapnya
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->judul }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('storage/tips/' . $item->gambar) }}"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{ $item->isi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
