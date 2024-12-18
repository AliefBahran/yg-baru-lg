<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKM Basket</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include 'sidebar.php'; ?>
    <style>
        /* Styling untuk logo UKM */
        .logo-ukm {
            width: 150px;
            /* Atur ukuran logo */
            border-radius: 10px;
            height: 150px;
            /* Tinggi sama dengan lebar untuk menjaga bentuk kotak */
            object-fit: cover;
            /* Pastikan gambar terisi penuh tanpa distorsi */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Efek transisi */
        }

        .logo-ukm:hover {
            transform: scale(1.1);
            /* Memperbesar logo saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            /* Bayangan lebih tajam saat hover */
        }

        /* Styling untuk teks deskripsi */
        .container h1 {
            font-size: 2rem;
            /* Ukuran judul lebih besar */
            font-weight: bold;
            /* Menonjolkan teks judul */
        }

        .container p {
            font-size: 1rem;
            /* Ukuran teks deskripsi */
            line-height: 1.5;
            /* Jarak antar baris */
            margin-top: 10px;
        }

        /* Gambar Event */
        .event-image {
            width: 100%;
            /* Menjadikan gambar responsif */
            height: auto;
            border-radius: 10px;
            /* Membulatkan sudut gambar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Efek transisi */
        }

        .event-image:hover {
            transform: scale(1.05);
            /* Memperbesar gambar saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            /* Efek bayangan lebih tajam saat hover */
        }

        .card-img-top {
            width: 100%;
            /* Gambar menyesuaikan lebar kartu */
            height: auto;
            /* Mengatur gambar agar proporsional */
            object-fit: cover;
            /* Memastikan gambar tidak terdistorsi */
            border-radius: 10px;
            /* Membulatkan sudut gambar */
        }



        /* Menambahkan ruang antara bagian Pengurus dan Event */
        .row>.col-md-6 {
            padding: 10px;
            /* Memberikan ruang antar kolom */
        }

        /* Styling gambar event */
        .event-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .event-image:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }


        /* Layout Responsif */
        @media (max-width: 768px) {
            .card-img-top {
                width: 100%;
                /* Gambar tetap responsif pada perangkat kecil */
            }

            .col-md-6 {
                margin-bottom: 30px;
                /* Memberikan jarak antar kolom untuk tampilan mobile */
            }

            .event-image {
                width: 100%;
                /* Gambar event tetap responsif */
            }
        }

        /* Ukuran kartu pengurus */
        .pengurus-card {
            width: 50%;
            /* Lebar kartu lebih kecil */
            margin: 0 auto;
            /* Memusatkan kartu */
            overflow: hidden;
            /* Memastikan elemen tidak meluap */
            border-radius: 10px;
            /* Membulatkan sudut kartu */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
        }

        /* Gambar dalam kartu */
        .pengurus-card img {
            width: 100%;
            /* Gambar menyesuaikan lebar kartu */
            height: auto;
            /* Menjaga proporsi gambar */
            object-fit: cover;
            /* Mengisi kartu tanpa distorsi */
            border-radius: 10px 10px 0 0;
            /* Membulatkan hanya sudut atas gambar */
        }

        /* Mengatur teks di dalam kartu */
        .pengurus-card .card-body {
            padding: 10px;
            /* Memberikan jarak dalam kartu */
            text-align: center;
            /* Memusatkan teks */
        }
    </style>

    <!-- Header Section -->
    <div class="container mt-4">
        <div class="row align-items-center">
            <!-- Logo UKM -->
            <div class="col-md-3 text-center">
                <img src="voli.jpeg" alt="Basket Logo" class="logo-ukm">
            </div>
            <!-- Konten Deskripsi -->
            <div class="col-md-9">
                <h1>UKM Djawa Tjap Parabola</h1>
                <p class="text-muted">
                    UKM Djawa Tjap Parabola adalah organisasi Mahasiswa di tingkat universitas, untuk mewadahi minat dan bakat mahasiswa dalam budaya yang ada di jawa. UKM Djawa Tjap Parabola terdapat juga beberapa divisi sebagai berikut:
                </p>
                <ul>
                    <li>Karawitan: Menampung minat dan bakat dalam musik tradisional Jawa.</li>
                    <li>Keroncong: Untuk mahasiswa yang hobi atau berminat pada genre musik keroncong.</li>
                    <li>Tari: Menampung minat dan bakat dalam seni tari tradisional Jawa.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <!-- Bagian Pengurus -->
            <div class="col-md-6">
                <h3 class="text-center">Pengurus</h3>
                <div class="row">
                    <!-- Ketua -->
                    <div class="col-md-6">
                        <div class="card pengurus-card">
                            <img src="ranggatel.jpg" alt="Ketua">
                            <div class="card-body">
                                <h5 class="card-title">Ketua</h5>
                                <p class="card-text">(Nama)</p>
                            </div>
                        </div>
                    </div>
                    <!-- Wakil Ketua -->
                    <div class="col-md-6">
                        <div class="card pengurus-card">
                            <img src="ranggatel.jpg" alt="Wakil Ketua">
                            <div class="card-body">
                                <h5 class="card-title">Wakil Ketua</h5>
                                <p class="card-text">(Nama)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Event -->
            <div class="col-md-6">
                <h3 class="text-center">Event</h3>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <img src="eventjawa.jpg" class="event-image" alt="Event 1">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="eventjawa.jpg" class="event-image" alt="Event 2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="eventjawa.jpg" class="event-image" alt="Event 3">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="eventjawa.jpg" class="event-image" alt="Event 4">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="eventjawa.jpg" class="event-image" alt="Event 5">
                    </div>
                    <div class="col-md-4 mb-3">
                        <img src="eventjawa.jpg" class="event-image" alt="Event 6">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>