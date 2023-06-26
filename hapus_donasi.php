<?php
// Kode untuk koneksi ke database dan periksa koneksi
$host = "localhost";
$username = "root";
$password = "";
$database = "data_yayasan_tim";
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Gagal koneksi ke MySQL: " . mysqli_connect_error();
}

// Periksa apakah ada parameter ID yang diberikan
if (isset($_GET['id_donatur'])) {
  $id_donatur = $_GET['id_donatur'];

  // Query untuk menghapus data calon siswa berdasarkan ID
  $query = "DELETE FROM donasi WHERE id_donatur = $id_donatur";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // Jika penghapusan berhasil, redirect ke halaman utama
    header("Location: halaman_admin.php");
    exit();
  } else {
    echo "Gagal menghapus data.";
  }
}
