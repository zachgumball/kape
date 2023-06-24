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
  exit;
}

// Retrieve POST data
$table = $_POST['table'];
$type = $_POST['type'];

// Prepare the query based on selected table and type
$query = "";
switch ($table) {
  case "calon_siswa":
    $query = "SELECT * FROM calon_siswa";
    break;
  case "donasi":
    $query = "SELECT * FROM donasi";
    if ($type) {
      $query .= " WHERE jenis = '$type'";
    }
    break;
}

// Execute the query
$result = mysqli_query($conn, $query);

// Generate search results table
$searchResults = "<table>";
$searchResults .= "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Tanggal</th><th>Jumlah</th><th>Jenis</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  $searchResults .= "<tr>";
  $searchResults .= "<td>" . $row['id'] . "</td>";
  $searchResults .= "<td>" . $row['nama'] . "</td>";
  $searchResults .= "<td>" . $row['alamat'] . "</td>";
  $searchResults .= "<td>" . $row['tanggal'] . "</td>";
  $searchResults .= "<td>" . $row['jumlah'] . "</td>";
  $searchResults .= "<td>" . $row['jenis'] . "</td>";
  $searchResults .= "</tr>";
}
$searchResults .= "</table>";

// Close the database connection
mysqli_close($conn);

// Send search results back as the response
echo $searchResults;
?>
