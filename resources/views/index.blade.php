<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>TimeBreak</title>
        <link
            crossorigin="anonymous"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            rel="stylesheet"
        />
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .navbar {
                background-color: #f8f9fa;
            }
            .navbar-brand {
                font-weight: bold;
            }
            .btn-login {
                background-color: #0d3b66;
                color: white;
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
            .event-card {
                border: 1px solid #dee2e6;
                border-radius: 5px;
                overflow: hidden;
                margin: 10px;
            }
            .event-card img {
                width: 100%;
                height: auto;
            }
            .event-card .card-body {
                padding: 10px;
            }
            .event-card .btn {
                background-color: #0d3b66;
                color: white;
                width: 100%;
            }
            .region-card {
                border: 1px solid #dee2e6;
                border-radius: 5px;
                padding: 20px;
                text-align: center;
                margin: 10px;
            }
            .footer {
                background-color: #f8f9fa;
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"> TimeBreak </a>
            </div>
        </nav>
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
                <h1>TimeBreak</h1>
                <div class="social-icons">
                    <i class="fab fa-instagram"> </i>
                    <i class="fab fa-tiktok"> </i>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="section-title">DAFTAR EVENT</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="event-card">
                        <img
                            alt="Event poster for Hilang Untuk Healing in Bandung"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/nQB3310ZyPbVGFDfuWL1fz5fS99dcYK6jbCUI97XQhP1MdHnA.jpg"
                            width="300"
                        />
                        <div class="card-body">
                            <button class="btn">More Info</button>
                            <h5 class="mt-2">HILANG UNTUK HEALING</h5>
                            <p>
                                WAKTU
                                <br />
                                06 OKTOBER 2024
                            </p>
                            <p>
                                LOKASI
                                <br />
                                BANDUNG
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-card">
                        <img
                            alt="Event poster for Hilang Untuk Healing in Garut"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/Wp8qesTbHOU3SK4FR32asvaxKJxSzkfrdcnbj6U79h4XmujTA.jpg"
                            width="300"
                        />
                        <div class="card-body">
                            <button class="btn">More Info</button>
                            <h5 class="mt-2">HILANG UNTUK HEALING</h5>
                            <p>
                                WAKTU
                                <br />
                                23 FEBRUARI 2025
                            </p>
                            <p>
                                LOKASI
                                <br />
                                GARUT
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-card">
                        <img
                            alt="Event poster for Hilang Untuk Healing in Garut"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/Wp8qesTbHOU3SK4FR32asvaxKJxSzkfrdcnbj6U79h4XmujTA.jpg"
                            width="300"
                        />
                        <div class="card-body">
                            <button class="btn">More Info</button>
                            <h5 class="mt-2">HILANG UNTUK HEALING</h5>
                            <p>
                                WAKTU
                                <br />
                                23 FEBRUARI 2025
                            </p>
                            <p>
                                LOKASI
                                <br />
                                GARUT
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="event-card">
                        <img
                            alt="Event poster for Hilang Untuk Healing in Garut"
                            height="400"
                            src="https://storage.googleapis.com/a1aa/image/Wp8qesTbHOU3SK4FR32asvaxKJxSzkfrdcnbj6U79h4XmujTA.jpg"
                            width="300"
                        />
                        <div class="card-body">
                            <button class="btn">More Info</button>
                            <h5 class="mt-2">HILANG UNTUK HEALING</h5>
                            <p>
                                WAKTU
                                <br />
                                23 FEBRUARI 2025
                            </p>
                            <p>
                                LOKASI
                                <br />
                                GARUT
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-secondary mt-3">
                    Lihat Seluruh Event
                </button>
            </div>
        </div>
        <div class="container">
            <h2 class="section-title">BERDASARKAN WILAYAH</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="region-card">
                        <h5>YOGYAKARTA</h5>
                        <p>Lihat seluruh event di Yogyakarta</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="region-card">
                        <h5>SOLO</h5>
                        <p>Lihat seluruh event di Solo</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="region-card">
                        <h5>JAKARTA</h5>
                        <p>Lihat seluruh event di JAKARTA</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="region-card">
                        <h5>BANDUNG</h5>
                        <p>Lihat seluruh event di BANDUNG</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-secondary mt-3">
                    Lihat Seluruh Wilayah
                </button>
            </div>
        </div>
        <footer class="footer mt-5">
            <p>TimeBreak</p>
            <p>
                Tentang Kami | Kebijakan Privasi | Kontak Kami | Syarat dan
                Ketentuan
            </p>
            <p>Copyright © 2024 - All right reserved by <a href="https://regaag.biz.id/">Rega Anton Giapierro</a></p>
        </footer>
    </body>
</html>
