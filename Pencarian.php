<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling */
        .search-bar {
            background-color: #e0dfdf;
            border-radius: 10px;
            padding: 10px;
            display: flex;
        }

        .category-card {
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            color: white;
            height: 200px;
            transition: transform 0.3s;
        }

        .category-card:hover {
            transform: scale(1.05);
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .category-title {
            font-size: 1.5rem;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <div class="container mt-5">
        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col">
                <div class="search-bar">
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search here">
                    <button class="btn btn-secondary ms-2">Search</button>
                </div>
            </div>
        </div>

        <!-- Categories -->
        <h2 class="mb-4">Categories</h2>
        <div class="row g-3">
            <!-- Kesenian dan Kebudayaan -->
            <div class="col-md-4">
                <a href="k_kesenian.php">
                    <div class="category-card">
                        <img src="Screenshot 2024-10-07 130545.png" alt="Kesenian dan Kebudayaan">
                        <div class="category-overlay">
                            <span class="category-title">Kesenian dan Kebudayaan</span>

                        </div>
                    </div>
                </a>
            </div>
            <!-- Olahraga -->
            <div class="col-md-4">
                <a href="k_olahraga.php">
                    <div class="category-card">
                        <img src="Screenshot 2024-10-07 130545.png" alt="Olahraga">
                        <div class="category-overlay">
                            <span class="category-title">Olahraga</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Penalaran -->
            <div class="col-md-4">
                <a href="penalaran.html">
                    <div class="category-card">
                        <img src="Screenshot 2024-10-07 130545.png" alt="Penalaran">
                        <div class="category-overlay">
                            <span class="category-title">Penalaran</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kerohanian -->
            <div class="col-md-4">
                <a href="kerohanian.html">
                    <div class="category-card">
                        <img src="Screenshot 2024-10-07 130545.png" alt="Kerohanian">
                        <div class="category-overlay">
                            <span class="category-title">Kerohanian</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Sosial -->
            <div class="col-md-4">
                <a href="sosial.html">
                    <div class="category-card">
                        <img src="Screenshot 2024-10-07 130545.png" alt="Sosial">
                        <div class="category-overlay">
                            <span class="category-title">Sosial</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Kegiatan Lainnya -->
            <div class="col-md-4">
                <a href="kegiatan-lainnya.html">
                    <div class="category-card">
                        <img src="Screenshot 2024-10-07 130545.png" alt="Kegiatan Lainnya">
                        <div class="category-overlay">
                            <span class="category-title">Kegiatan Lainnya</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>