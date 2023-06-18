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
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];

$checkQuery = "SELECT * FROM calon_siswa WHERE nama = '$nama' AND ttl = '$ttl'";
$result = $conn->query($checkQuery);

if ($result->num_rows > 0) {
    echo "already_registered";
} else {
    $insertQuery = "INSERT INTO calon_siswa (nama, alamat, ttl, umur,pendidikan_terakhir, no_tlp, email) VALUES ('$nama', '$alamat', '$ttl', '$umur','$pendidikan_terakhir' '$no_tlp', '$email')";
    if ($conn->query($insertQuery) === true) {
        echo "Form data saved successfully";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>
