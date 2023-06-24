<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'data_yayasan_tim';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM data_admin WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<script>window.open("halaman_admin.php", "_blank");</script>';
} else {
    echo 'Username atau password salah.';
}

$conn->close();
?>
