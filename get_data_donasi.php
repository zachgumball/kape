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

  // Query untuk mengambil data calon siswa berdasarkan ID
  $query = "SELECT * FROM donasi WHERE id_donatur = $id_donatur";
  $result = mysqli_query($conn, $query);

  // Periksa apakah data ditemukan
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Kirim data dalam format JSON
    echo json_encode($row);
  } else {
    echo "Data tidak ditemukan.";
  }
}
