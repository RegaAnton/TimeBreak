<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>TimeBreak</title>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
            rel="stylesheet"
        />
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .navbar {
                background-color: #130b36;
            }

            .navbar .nav-link,
            .navbar-brand {
                color: #fdd100 !important ;
            }

            .hero-section {
                position: relative;
                text-align: center;
                color: white;
            }
            .hero-section img {
                width: 100%;
                height: auto;
            }
            .hero-section .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
            }
            .hero-section .content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .hero-section .content h1 {
                font-size: 3rem;
                color: #fdd100;
            }
            .hero-section .content .social-icons i {
                font-size: 1.5rem;
                margin: 0 10px;
            }
            .section-title {
                font-weight: bold;
                margin: 20px 0;
                text-align: center;
            }

            .footer {
                background-color: #130b36;
                color: #fdd100;
                padding: 20px;
                text-align: center;
            }
            .link-navbar {
                color: #fdd100;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand mx-5" href="#">
                    <img
                        src="images/logo/logo.png"
                        alt="TimeBreak_Logo"
                        width="50"
                        height="44"
                    />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">JADWAL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MERCHANDISE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-outline-success" type="submit">
                        LOGIN
                    </button> -->
                </div>
            </div>
        </nav>
        <!-- Jumbotron -->
        <div class="hero-section">
            @foreach ($jumbotron as $item)
            <img
                alt="{{ $item->title }}"
                height="500"
                src="{{ $item->image_url }}"
                width="1200"
            />
            @endforeach
            <div class="overlay"></div>
            <div class="content">
                <h1 class="fw-bolder">Sharing Time with TimeBreak</h1>
                <div class="social-icons">
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-youtube"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Event -->
            <div class="event">
                <h2 class="section-title">DAFTAR EVENT</h2>
                <div class="row">
                    @foreach ($events as $item)
                    <div class="col-md-4 my-2">
                        <div class="card" style="width: 18rem">
                            <img
                                src="{{ $item->image }}"
                                class="card-img-top"
                                alt="{{ $item->event_name }}"
                            />
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $item->event_name }}
                                </h5>
                                <hr />
                                <!-- Button trigger modal -->
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#{{ $item->slug }}"
                                >
                                    Info Lengkapnya
                                </button>
                                <!-- Modal -->
                                <div
                                    class="modal fade"
                                    id="{{ $item->slug }}"
                                    data-bs-backdrop="static"
                                    data-bs-keyboard="false"
                                    tabindex="-1"
                                    aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true"
                                >
                                    <div
                                        class="modal-dialog modal-dialog-scrollable"
                                    >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1
                                                    class="modal-title fs-5"
                                                    id="staticBackdropLabel"
                                                >
                                                    {{ $item->event_name }}
                                                </h1>
                                                <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $item->description }}
                                                <hr />
                                                <i class="bi bi-calendar"></i>
                                                {{$item->event_date }}
                                                <hr />
                                                <i class="bi bi-alarm"></i>
                                                {{ $item->event_time }}
                                                <hr />
                                                <i class="bi bi-geo-alt"></i>
                                                {{ $item->location }}
                                                <hr />
                                                <i class="bi bi-camera-video"></i>
                                                <a href="{{ $item->replay }}" style="text-decoration: none;">
                                                    Replay
                                                </a>
                                                <hr />
                                                <i class="bi bi-camera"></i>
                                                <a href="{{ $item->photo }}" style="text-decoration: none;">
                                                    Dokumentasi
                                                </a>
                                            </div>
                                            <div class="modal-footer">
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary"
                                                    data-bs-dismiss="modal"
                                                >
                                                    Close
                                                </button>
                                                <a href="{{ $item->registration_link }}" class="btn btn-success"><i class="bi bi-ticket-perforated"></i> Tiket</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <button class="btn btn-secondary mt-3">
                        Lihat Seluruh Event
                    </button>
                </div>
            </div>
        </div>
        {{-- Footer --}}
        <footer class="footer mt-5">
            <p>TIMEBREAK</p>
            <p>
                Copyright © 2024 - Create with love by
                <a href="https://regaag.biz.id/" class="link-navbar"
                    >Rega Anton Giapierro</a
                >
            </p>
        </footer>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
    ></script>
</html>
