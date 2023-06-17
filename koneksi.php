<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_yayasan_tim";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$umur = $_POST['umur'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];

$sql = "INSERT INTO calon_siswa (nama, alamat, ttl, umur, no_tlp, email) VALUES ('$nama', '$alamat', '$ttl', '$umur', '$no_tlp', '$email')";
if ($conn->query($sql) === true) {
    echo "Form data saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
