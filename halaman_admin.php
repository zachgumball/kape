<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Navigasi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <style>
    body{
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 30px;
        margin-right: 30px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-image: url(background_admin.webp);
        background-size: cover;
        background-repeat: no-repeat;
    }
    .content {
      padding: 20px;
    }
    .hidden {
      display: none;
    }
    .list-group{
        background-color: rgb(10, 76, 245);
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .list-group-item{
        padding-right: 110px;
        padding-left: 110px;
        padding-top: 10px;
        padding-bottom: 10px;
        color: aliceblue;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-decoration: none;
        background-color: rgb(16, 194, 239);
        border: 2px solid blue;
        margin-left: 60px;
        margin-right: 20px;
        border-radius: 10px;
    }
    .content{
        background-color: aliceblue;
        color: black;
        text-align: center;
    }
    .table th{
      background-color: brown;
      padding-left: 35px;
      padding-right: 35px;
    }
    .table td{
      background-color: grey;
      text-align: left;
      padding-left: 5px;
      text-align: center;
    }
    .navbar-brand{
      background-color: aquamarine;
      padding-left: 30px;
      padding-right: 30px;
      border-radius: 10px;
    }
    .btn-edit {
      background-color: #5cb85c;
      color: white;
    }
    .btn-hapus {
      background-color: #d9534f;
      color: white;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="text-decoration: none;">Halaman Admin</a>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <div class="col-3">
        <div class="list-group" id="navLinks">
          <a href="#" class="list-group-item list-group-item-action active" data-content="content1">DATA CALON SISWA/SANTRI</a>
          <a href="#" class="list-group-item list-group-item-action" data-content="content2">DATA DONATUR</a>
          <a href="#" class="list-group-item list-group-item-action" data-content="content3">DATA DONASI YAYASAN</a>
        </div>
      </div>
      <div class="col-9">
        <div id="content1" class="content">
          <h1 style="margin-top: -10px; margin-bottom:20px">Data Calon Siswa</h1>
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

            // Query untuk mengambil data dari tabel
            $query = "SELECT * FROM calon_siswa";
            $result = mysqli_query($conn, $query);

            // Cek apakah ada data yang ditemukan
            if (mysqli_num_rows($result) > 0) {
              echo "<table class='table'>";
              echo "<thead>";
              echo "<tr>";
              echo "<th>ID</th>";
              echo "<th>Nama</th>";
              echo "<th>Alamat</th>";
              echo "<th>Tempat Tanggal Lahir</th>";
              echo "<th>Umur</th>";
              echo "<th>Pendidikan Terakhir</th>";
              echo "<th>No Telepon</th>";
              echo "<th>Email</th>";
              echo "<th>Action</th>";
              echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
              
              // Tampilkan data dalam tabel
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['ttl'] . "</td>";
                echo "<td>" . $row['umur'] . "</td>";
                echo "<td>" . $row['pendidikan_terakhir'] . "</td>";
                echo "<td>" . $row['no_tlp'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo '<td><a href="edit.php?id=' . $row['id'] . '"><button class="btn-box btn-edit">Edit</button></a><a href="hapus.php?id=' . $row['id'] . '"><button class="btn-box btn-hapus">Hapus</button></a></td>';
                echo "</tr>";
              }
              
              echo "</tbody>";
              echo "</table>";
            } else {
              echo "No data found.";
            }

            // Tutup koneksi ke database
            mysqli_close($conn);
          ?>
        </div>
        <div id="content2" class="content hidden">
        <h1>DATA DONATUR</h1>
        <?php
          $host = "localhost";
          $username = "root";
          $password = "";
          $database = "data_yayasan_tim";
          $conn = mysqli_connect($host, $username, $password, $database);

          if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          $query = "SELECT * FROM donasi";
          $result = mysqli_query($conn, $query);

          if (mysqli_num_rows($result) > 0) {
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID Donatur</th>";
            echo "<th>Nama Donatur</th>";
            echo "<th>Alamat</th>";
            echo "<th>No Telepon</th>";
            echo "<th>Email</th>";
            echo "<th>Donasi Untuk</th>";
            echo "<th>Tipe Donasi</th>";
            echo "<th>Jumlah Donasi</th>";
            echo "<th>Tanggal Donasi</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            // Tampilkan data dalam tabel
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['id_donatur'] . "</td>";
              echo "<td>" . $row['nama_donatur'] . "</td>";
              echo "<td>" . $row['alamat'] . "</td>";
              echo "<td>" . $row['no_tlp'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['donasi_untuk'] . "</td>";
              echo "<td>" . $row['tipe_donasi'] . "</td>";
              echo "<td>" . $row['jumlah_donasi'] . "</td>";
              echo "<td>" . $row['tanggal_donasi'] . "</td>";
              echo '<td><a href="edit.php?id=' . $row['id_donatur'] . '"><button class="btn-box btn-edit">Edit</button></a><a href="hapus.php?id=' . $row['id_donatur'] . '"><button class="btn-box btn-hapus">Hapus</button></a></td>';
              echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";

            // Menghitung total tipe_donasi yang berisi "uang"
            $query_total = "SELECT SUM(jumlah_donasi) AS total_uang FROM donasi WHERE tipe_donasi = 'uang'";
            $result_total = mysqli_query($conn, $query_total);
            $row_total = mysqli_fetch_assoc($result_total);
            $total_uang = $row_total['total_uang'];

            $formatted_total_uang = number_format($total_uang, 0, ',', '.');

            echo "<p>Total uang donasi: Rp." . $formatted_total_uang . "</p>";
          } else {
            echo "No data found.";
          }

          // Tutup koneksi ke database
          mysqli_close($conn);
        ?>
      </div>


        </div>
        <div id="content3" class="content hidden">
          <h1>Data Donasi</h1>
          <form method="GET">
            <label for="nama_barang">Cari Nama Barang:</label>
            <input type="text" name="nama_barang" id="nama_barang">
            <input type="submit" value="Cari">
          </form>

          <form method="GET">
            <input type="hidden" name="show_all" value="1">
            <input type="submit" value="Tampilkan Semua Data" style="margin-top: 20px;">
          </form>

          <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "data_yayasan_tim";
            $conn = mysqli_connect($host, $username, $password, $database);

            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $nama_barang = isset($_GET['nama_barang']) ? $_GET['nama_barang'] : '';
            $show_all = isset($_GET['show_all']) && $_GET['show_all'] == 1;

            $query = "SELECT donasi.id_donatur, donasi.donasi_untuk, donasi.nama_donatur, detail_barang.id_detail_barang, detail_barang.nama_barang, detail_barang.jumlah_barang
                      FROM donasi
                      JOIN detail_barang ON donasi.id_donatur = detail_barang.id_donatur";

            if (!$show_all) {
              $query .= " WHERE detail_barang.nama_barang LIKE '%$nama_barang%'";
            }

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
              echo "<table class='table'>";
              echo "<thead>";
              echo "<tr>";
              echo "<th>ID Donatur</th>";
              echo "<th>ID Detail Barang</th>";
              echo "<th>Nama Donatur</th>";
              echo "<th>Donasi Untuk</th>";
              echo "<th>Nama Barang</th>";
              echo "<th>Jumlah Barang</th>";
              echo "<th>Total Jumlah Barang</th>";
              echo "</tr>";
              echo "</thead>";
              echo "<tbody>";

              $totalJumlahBarang = 0;

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_donatur'] . "</td>";
                echo "<td>" . $row['id_detail_barang'] . "</td>";
                echo "<td>" . $row['nama_donatur'] . "</td>";
                echo "<td>" . $row['donasi_untuk'] . "</td>";
                echo "<td>" . $row['nama_barang'] . "</td>";
                echo "<td>" . $row['jumlah_barang'] . "</td>";
                echo "</tr>";

                $totalJumlahBarang += $row['jumlah_barang'];
              }

              echo "</tbody>";
              echo "<tfoot>";
              echo "<tr>";
              echo "<td colspan='5'></td>";
              echo "<td><strong>Total:</strong></td>";
              echo "<td>" . $totalJumlahBarang . "</td>";
              echo "</tr>";
              echo "</tfoot>";
              echo "</table>";
            } else {
              echo "No data found.";
            }

            mysqli_close($conn);
          ?>
        </div>
        </div>
        </div>
      </div>

      <script>
        const navLinks = document.querySelectorAll("#navLinks .list-group-item");

        navLinks.forEach(link => {
          link.addEventListener("click", () => {
            const contentId = link.getAttribute("data-content");
            const contentElements = document.querySelectorAll(".content");

            contentElements.forEach(content => {
              content.classList.add("hidden");
            });

            const selectedContent = document.getElementById(contentId);
            selectedContent.classList.remove("hidden");
          });
        });
      </script>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navLinks = document.querySelectorAll("#navLinks .list-group-item");

      navLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
          event.preventDefault();

          const contentId = this.getAttribute("data-content");

          document.querySelectorAll(".content").forEach(function(content) {
            content.classList.add("hidden");
          });

          document.getElementById(contentId).classList.remove("hidden");
        });
      });
    });
  </script>
</body>
</html>
