<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "data_yayasan_tim";
$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Periksa apakah ada parameter POST yang diterima dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Dapatkan nilai input yang dikirim dari formulir
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $ttl = $_POST['ttl'];
  $umur = $_POST['umur'];
  $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
  $no_tlp = $_POST['no_tlp'];
  $email = $_POST['email'];

  // Query untuk memperbarui data calon siswa berdasarkan ID
  $query = "UPDATE calon_siswa SET
              nama = '$nama',
              alamat = '$alamat',
              ttl = '$ttl',
              umur = '$umur',
              pendidikan_terakhir = '$pendidikan_terakhir',
              no_tlp = '$no_tlp',
              email = '$email'
            WHERE id = $id";

  $result = mysqli_query($conn, $query);

  if ($result) {
    // Jika pembaruan berhasil, redirect ke halaman utama atau halaman yang Anda inginkan
    header("Location: halaman_admin.php");
    exit();
  } else {
    echo "Failed to update data.";
  }
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
