<?php
// Aktifkan laporan error untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Memulai session
session_start();

// Masukkan file koneksi ke database
include 'database.php'; // Pastikan koneksi berhasil

// Variabel untuk pesan error
$error_message = '';

// Memproses form jika ada request POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form dan bersihkan dari spasi yang tidak perlu
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Query untuk mengambil data pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username); // "s" berarti string
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika ada data user dengan username tersebut
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password yang dimasukkan dengan password yang disimpan di database
        if ($password === $user['password']) { // Jika password cocok
            // Mulai session dan simpan informasi login
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role']; // Menyimpan role untuk akses selanjutnya
            $_SESSION['ukm_id'] = $user['ukm_id']; // Jika ada kolom ukm_id pada tabel users

            // Redirect ke Beranda.php setelah login berhasil
            header("Location: Beranda.php");
            exit();  // Menghentikan eksekusi lebih lanjut
        } else {
            // Jika password salah
            $error_message = 'Password salah!';
        }
    } else {
        // Jika username tidak ditemukan
        $error_message = 'Username tidak ditemukan!';
    }

    // Tutup prepared statement
    $stmt->close();
}

// Tutup koneksi database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Login.css">
    <!-- Menambahkan link Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        // Fungsi untuk menampilkan atau menyembunyikan password
        function togglePassword() {
            var passwordField = document.getElementById('password');
            var toggleIcon = document.getElementById('toggle-icon');
            
            // Cek jika password sedang tersembunyi atau terlihat
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.innerHTML = '<i class="fas fa-eye-slash"></i>'; // Mata tertutup
            } else {
                passwordField.type = 'password';
                toggleIcon.innerHTML = '<i class="fas fa-eye"></i>'; // Mata terbuka
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="doodle.jpg" alt="Doodle" class="doodle-image">
        </div>
        <div class="right-section">
            <!-- Form hanya meminta username dan password -->
            <form class="login-form" method="POST" action="Login.php">
                <h2>Log in</h2>

                <!-- Username -->
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <!-- Password -->
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" required>
                    <!-- Ikon mata untuk toggle password -->
                    <span id="toggle-icon" class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye"></i> <!-- Mata terbuka -->
                    </span>
                </div>

                <!-- Forgot Password Link -->
                <a href="#" class="forgot-password">Forgot Password?</a>

                <!-- Login Button -->
                <button type="submit" class="login-button">Login</button>

                <!-- Link to create account -->
                <a href="BuatAkun.html" class="create-account">Buat akun</a>
                <br>

                <!-- Display Error Message -->
                <?php if (!empty($error_message)): ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
