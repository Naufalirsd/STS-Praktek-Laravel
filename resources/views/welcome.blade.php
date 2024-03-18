<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metatitle }}</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="image/logo.png" alt="Logo Amani rumah belajar" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item" style="padding-right: 20px">
                            <a class="nav-link  text-white" href="/">Home</a>
                        </li>
                        <li class="nav-item" style="padding-right: 20px">
                            <a class="nav-link text-white" href="/tentang-kami">Tentang Kami</a>
                        </li>
                        <li class="nav-item" style="padding-right: 20px">
                            <a class="nav-link text-white" href="/kontak-kami">Kontak Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container main-content mt-5">
        <div class="hd row">
            <div class="header col-md-6 mt-5 gap-3">
                <h1 class="cream-text">{{ $judul }}</h1>
                <h3 class="cream-text-2">{{ $isi }}</h3>
            </div>
             @if(request()->is('/')) <!-- Menampilkan gambar hanya di halaman beranda -->
            <div class="hero col-md-6">
                <img src="image/{{ $photo }}" alt="" width="300">
            </div>
            @endif
        </div>
        <button class="btn btn-primary btn-custom mt-3">Ingin Tahu Nih</button>
    </main>

    <section class="welcome-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 text-center">
                    <img src="image/logo.png" alt="Logo" class="logo">
                </div>
            </div>
            <div class="row align-items-center justify-center ">
                <div class="col-md-12 text-center">
                    <h1 class="welcome-title">Selamat Datang di Website Amani Rumah Belajar</h1>
                </div>
            </div>
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="image/section.jpeg" alt="Image 1" class="welcome-image">
                </div>
                <div class="col-md-4 text-center">
                    <p>
                        Alhamdulillah saat ini kami memiliki instruktur yang berkompeten dibidangnya dari mulai menjahit, garmen, batik, merajut, membatik, craft dan masih banyak lainnya.
                    </p>
                    <div class="row mt-5 align-items-center justify-content-center">
                        <div class="section-div text-center justify-center">
                            <h1>Trainer maupun instruktur kami pernah menjuarai beberapa perlombaan, diantaranya :</h1>
                            <ul>
                                <li>Mengikuti Lomba KKIN (Kompetisi Keterampilan Instruktur Nasional) Tingkat Regional yang Diselengarakan di BLK Padang pada Tahun 2017, Mendapat Peringkat Juara 3.</li>
                                <li>Juara Harapan 2 Pada Lomba Apresiasi PTK PAUDNI Instruktur Tata Busana Tingkat Nasional di Bandung Tahun 2014.</li>
                                <li>Juara Harapan 1 Lomba Apresiasi Instruktur Kursus dan Pelatihan tingkat Nasional DPP Forum PLKP di Jakarta tahun 2023.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5 align-items-center justify-content-center">
                        <div class="col-md-12 text-center">
                            <p>
                                Sampai Saat Ini Lembaga Kami Telah Memiliki lebih dari Seribu Lulusan, Yang Bekerja Di Perusahaan Dan Berwirausaha.
                            </p>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </section>
    </main>

    <footer class="text-white text-center py-4 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; 2024 by Naufal. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>