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
  $id_donatur = $_POST['id_donatur'];
  $nama_donatur = $_POST['nama_donatur'];
  $alamat = $_POST['alamat'];
  $no_tlp = $_POST['no_tlp'];
  $email = $_POST['email'];
  $donasi_untuk = $_POST['donasi_untuk'];
  $tipe_donasi = $_POST['tipe_donasi'];
  $nama_barang = $_POST['nama_barang'];
  $jumlah_donasi = $_POST['jumlah_donasi'];
  $tanggal_donasi = $_POST['tanggal_donasi'];

  // Query untuk memperbarui data calon siswa berdasarkan ID
  $query = "UPDATE donasi SET
              nama_donatur = '$nama_donatur',
              alamat = '$alamat',
              no_tlp = '$no_tlp',
              email = '$email',
              donasi_untuk = '$donasi_untuk',
              tipe_donasi = '$tipe_donasi',
              nama_barang = '$nama_barang',
              jumlah_donasi = '$jumlah_donasi',
              tanggal_donasi = '$tanggal_donasi'
            WHERE id_donatur = $id_donatur";

  $result = mysqli_query($conn, $query);

  if ($result) {
    // Jika pembaruan berhasil, redirect ke halaman utama atau halaman yang Anda inginkan
    header("Location: halaman_admin.php#content2");
    exit();
  } else {
    echo "Gagal update data.";
  }
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
