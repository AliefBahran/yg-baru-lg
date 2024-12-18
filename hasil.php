<?php 
// Include koneksi database
require_once 'databasee.php';

// Ambil jawaban user berdasarkan ID terakhir
$query = "SELECT * FROM user_answers ORDER BY id DESC LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $userAnswers = $result->fetch_assoc();

    // Ambil jawaban user
    $question1 = $userAnswers['question1'];
    $question2 = $userAnswers['question2'];
    $question3 = $userAnswers['question3'];
    $question4 = $userAnswers['question4'];
    $question5 = $userAnswers['question5'];

    // Logika pencocokan berdasarkan jawaban
    $recommendedUKM = [];
    $hasilJawaban = [];

    // Logika berdasarkan jawaban
    if ($question1 == 'Seni') {
        $recommendedUKM[] = "UKM Seni dan Tari";
        $hasilJawaban[] = "Anda memilih kegiatan Seni, sehingga UKM Seni dan Tari cocok untuk Anda.";
    }
    if ($question1 == 'Olahraga' || $question2 == 'Fisik') {
        $recommendedUKM[] = "UKM Olahraga";
        $hasilJawaban[] = "Pilihan Anda terkait kegiatan fisik atau olahraga cocok dengan UKM Olahraga.";
    }
    if ($question1 == 'Organisasi' || $question3 == 'Teknis') {
        $recommendedUKM[] = "UKM Organisasi";
        $hasilJawaban[] = "Anda menunjukkan minat pada kegiatan teknis atau organisasi, sehingga UKM Organisasi direkomendasikan.";
    }
    if ($question1 == 'Komunitas Daerah' || $question4 == 'Sosial') {
        $recommendedUKM[] = "UKM Komunitas Daerah";
        $hasilJawaban[] = "Ketertarikan pada komunitas daerah atau kegiatan sosial sesuai dengan UKM Komunitas Daerah.";
    }
    if ($question4 == 'Religius') {
        $recommendedUKM[] = "UKM Religius";
        $hasilJawaban[] = "Pilihan Anda pada kegiatan religius cocok dengan UKM Religius.";
    }
    if ($question4 == 'Lingkungan') {
        $recommendedUKM[] = "UKM Peduli Lingkungan";
        $hasilJawaban[] = "Ketertarikan pada kegiatan lingkungan cocok dengan UKM Peduli Lingkungan.";
    }
    if ($question5 == 'Karir') {
        $recommendedUKM[] = "UKM Pengembangan Karir";
        $hasilJawaban[] = "Minat Anda pada pengembangan karir sesuai dengan UKM Pengembangan Karir.";
    }
    if ($question5 == 'Pengembangan Diri') {
        $recommendedUKM[] = "UKM Pengembangan Diri";
        $hasilJawaban[] = "Anda menunjukkan minat pada pengembangan diri, sehingga UKM Pengembangan Diri cocok untuk Anda.";
    }

    // Hapus duplikasi
    $recommendedUKM = array_unique($recommendedUKM);
    $hasilJawaban = implode(" ", $hasilJawaban);

    // Simpan hasil ke tabel user_answers
    $insertQuery = "INSERT INTO user_answers (user_id, question1, question2, question3, question4, question5, answers) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);

    if ($stmt) {
        // Bind parameter dengan benar, pastikan jumlah parameter yang di-bind sesuai
        $stmt->bind_param("issssss", $userAnswers['id'], $question1, $question2, $question3, $question4, $question5, $hasilJawaban);

        // Eksekusi perintah insert
        $stmt->execute();
        $stmt->close();
    }
} else {
    echo "Tidak ada data jawaban yang ditemukan.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Rekomendasi</title>
  <link rel="stylesheet" href="hasil.css">
</head>
<body>
  <div class="container">
    <h1>Hasil Rekomendasi UKM</h1>

    <?php if (!empty($recommendedUKM)) : ?>
      <p>Berdasarkan jawaban Anda, berikut adalah UKM yang kami rekomendasikan:</p>
      <ul class="recommendation-list">
        <?php foreach ($recommendedUKM as $ukm) : ?>
          <li><?php echo htmlspecialchars($ukm); ?></li>
        <?php endforeach; ?>
      </ul>

      <p><strong>Alasan rekomendasi:</strong></p>
      <p><?php echo htmlspecialchars($hasilJawaban); ?></p>
    <?php else : ?>
      <p>Tidak ada UKM yang sesuai dengan jawaban Anda. Silakan coba lagi.</p>
    <?php endif; ?>

    <a href="DaftarUKM.html" class="retry-button">Klik untuk kembali</a>
  </div>
</body>
</html>
