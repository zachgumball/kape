<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_yayasan_tim";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$nama_donatur = $_POST['nama_donatur'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$donasi_untuk = $_POST['donasi_untuk'];
$tipe_donasi = $_POST['tipe_donasi'];
$jumlah_donasi = $_POST['jumlah_donasi'];
$tanggal_donasi = $_POST['tanggal_donasi'];

$sql = "INSERT INTO donasi (nama_donatur, alamat, no_tlp, email, donasi_untuk, tipe_donasi, jumlah_donasi, tanggal_donasi)
        VALUES ('$nama_donatur', '$alamat', '$no_tlp', '$email', '$donasi_untuk', '$tipe_donasi', '$jumlah_donasi', '$tanggal_donasi')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
