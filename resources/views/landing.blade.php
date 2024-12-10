<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nujunikah</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Pinyon+Script&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

</head>

<body>
    <a href="#" title="Go to top" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;"><img
            src="{{ asset('images/logo_wa.png') }}" alt="" width="80"></a>

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt=""
                    width="90"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#vendor">Vendor</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#testi">Testimonial</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link" href="#tips">Tips & Tricks</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-outline-success" type="button"
                style="font-size: 20px; background-color: #5F6F52; color: #ffffff; border-color: #5F6F52; boder-radius: 30px">Login</a>
        </div>
    </nav>

    <section class="hero" style="background-color: #f9ece0">
        <div class="container">
            <div class="row">
                <div class="col-md-7" style="margin-top: 200px">
                    <p class="playfair-display text-center fs-3">CAPTURE HAPPY MOMENTS WITH US</p>
                    <p class="playfair-display text-center" style="font-size: 80px; color: #5F6F52">
                        NUJU<span style="color: #B99470">NIKAH</span></p>
                    <p class="playfair-display text-center fs-4 px-5">We Create, We Plan, and We Execute</p>
                    <p class="playfair-display text-center fs-4 px-5" style="margin-top: -3px">“We are ready to make
                        your wedding very Special”
                    </p>
                    <center>
                        <button class="btn btn-success mt-4"
                            style="font-size: 28px; background-color: #B99470; color: white; border-color: #B99470; border-radius: 30px; padding-left: 50px; padding-right: 50px">Contact
                            Now!</button>
                    </center>
                </div>
                <div class="col-md-5" style="margin-top: 120px">
                    <img src="{{ asset('images/hero.png') }}" alt="" width="85%" style="margin-bottom: 40px">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 justify-content-center">
                    <img src="{{ asset('images/logo.png') }}" style="margin-top: 100px; margin-bottom: 100px"
                        alt="" width="70%">
                </div>
                <div class="col-md-6" style="margin-top: 30px">
                    <div class="visi-misi-section">
                        <div class="visi">
                            <center>
                                <h2 class="my-4">VISI</h2>
                            </center>
                            <div class="visi-box">
                                <p style="color: #ffffff; font-size: 20px">Menjadi wedding organizer terdepan dan
                                    terpercaya serta
                                    menjadi
                                    WO trend setter dalam
                                    memberikan jasa penyelenggara pernikahan dan menjadi partner yang terpercaya</p>
                            </div>
                        </div>
                        <div class="misi">
                            <center>
                                <h2 class="my-4">MISI</h2>
                            </center>
                            <div class="misi-box">
                                <p style="color: #ffffff; font-size: 20px">Memberikan solusi terbaik, mampu memberikan
                                    ide atau konsep di bidang wedding,
                                    bekerja sama
                                    dengan berbagai vendor-vendor terbaik pernikahan dan memberikan service yang
                                    berkualitas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero scrollspy" id="gallery" style="background-color: #f9ece0">
        <div class="container">
            <br><br><br><br>
            <p class="playfair-display text-center" style="color: #5F6F52; font-size: 40px">OUR <span
                    style="color: #B99470">GALLERIES</span></p>
            <br><br>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title pinyon-script-regular text-center" style="font-size: 80px">Achan
                                    & Disti
                                </h5>
                            </div>
                        </div>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Galeri Achan & Disti</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
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
            <br><br><br><br>
        </div>
    </section>

    <section class="scrollspy" id="vendor">
        <div class="container">
            <p class="playfair-display text-center mt-5 fw-bold" style="color: #5F6F52; font-size: 40px">Overjoyed To
                Have
                Work</p>
            <p class="playfair-display text-center fw-bold"
                style="color: #B99470; font-size: 40px; margin-top: -20px">
                Featured In</p>

            <div class="accordion" id="accordionExample" style="margin-bottom: 50px">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            VANUE
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            CATERING
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            DECORATION
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            PHOTO & VIDEO
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            MUA & ATTIRE
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            ENTERTAINMENT
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                                <div class="col-md-6 mt-3">
                                    BALAI SAMUDERA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero scrollspy" id="testi" style="background-color: #f9ece0">
        <div class="container">
            <br><br><br>
            <p class="playfair-display text-center mt-5 fw-bold" style="color: #5F6F52; font-size: 40px">What They're
                Saying</p>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"
                data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="playfair-display text-center" style="color: #5F6F52; font-size: 30px; padding:20px">
                            "We are
                            so
                            grateful to have NUJU NIKAH as our partner in our wedding, it was a memorable one."</p>
                    </div>
                    <div class="carousel-item">
                        <p class="playfair-display text-center px-5" style="color: #5F6F52; font-size: 30px">"We are
                            so
                            grateful to have NUJU NIKAH as our partner in our wedding, it was a memorable one."</p>
                    </div>
                    <div class="carousel-item">
                        <p class="playfair-display text-center px-5" style="color: #5F6F52; font-size: 30px">"We are
                            so
                            grateful to have NUJU NIKAH as our partner in our wedding, it was a memorable one."</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev"
                    style="background-color: #5F6F52; border-color: #5F6F52; width: 30px; height: 30px; padding: 0;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next"
                    style="background-color: #5F6F52; border-color: #5F6F52; width: 30px; height: 30px; padding: 0;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <br><br>
    </section>

    <section class="hero scrollspy" id="tips">
        <div class="container">
            <p class="playfair-display text-center mt-5 fw-bold" style="color: #5F6F52; font-size: 40px">Tips & Tricks
            </p>

            <div class="row mt-5">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <center>
                <a href="" class="btn btn-outline-success" style="font-size: 20px">Selengkapnya</a>
            </center>

            <p class="playfair-display text-center mt-5 fw-bold"
                style="color: #5F6F52; font-size: 40px; margin-top: 100px">OVERJOYED TO
                HAVE WORK FEATURED IN
            </p>

            <div class="d-flex mt-3">
                <img src="{{ asset('images/indapras.png') }}" alt="" width="15%"
                    style="margin-right: 85px">
                <img src="{{ asset('images/handsome.png') }}" alt="" width="15%"
                    style="margin-right: 85px">
                <img src="{{ asset('images/3cd.png') }}" alt="" width="15%" style="margin-right: 85px">
                <img src="{{ asset('images/janji.png') }}" alt="" width="15%" style="margin-right: 85px">
                <img src="{{ asset('images/kei.png') }}" alt="" width="15%">
            </div>
        </div>
        <br><br>
    </section>

    <section class="hero" style="background-color: #B99470">
        <br><br>>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h1 class="playfair-display fw-bold" style="color: #ffffff">NUJUNIKAH</h1><br>
                    <p class="inter" style="color: #ffffff; font-size: 20px">Adalah wedding planner dan organizer.
                        Brand ini telah
                        berdiri sejak tahun 2020,
                        namun,
                        berkecimpung pada industri ini dilakukan sejak tahun 2014.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h1 class="playfair-display fw-bold" style="color: #ffffff">ALAMAT</h1><br>
                    <p class="inter" style="color: #ffffff; font-size: 20px">Gedung Trio Lt. 2 - 201
                        Jalan Mampang Prapatan, Jakarta Selatan</p>
                </div>
                <div class="col-md-4 text-center">
                    <h1 class="playfair-display fw-bold" style="color: #ffffff">KONTAK KAMI</h1><br>
                    <div class="d-flex">
                        <img src="{{ asset('images/phone.png') }}" alt=""
                            style="margin-left: 70px; margin-right: 12px"> <span
                            style="color: #ffffff; font-size: 20px">0822-1881-8888
                            (Ph)</span>
                    </div>
                    <div class="d-flex mt-3">
                        <img src="{{ asset('images/gmail.png') }}" alt=""
                            style="margin-left: 60px; margin-right: 10px"> <span
                            style="color: #ffffff; font-size: 20px">nujunikah@gmail.com</span>
                    </div>
                    <div class="d-flex mt-2">
                        <img src="{{ asset('images/instagram.png') }}" alt=""
                            style="margin-left: 65px; margin-right: 15px"> <span
                            style="color: #ffffff; font-size: 20px">@nujunikah</span>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        <center>
            <span class="inter" style="color: #ffffff; font-size: 20px">@NUJUNIKAH, 2023, ALL RESERVED</span>
        </center>
        <br>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>
