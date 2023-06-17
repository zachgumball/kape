<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yayasan Tunas Insan Mulia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="logo_yayasan.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Caveat&family=Source+Sans+Pro&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap');
    .container-fluid{
        background-color: rgb(9, 104, 42);
        border-radius: 5px;
        display: flex;
        justify-content: center;
      }
    .nav-item {
        margin-right: 20px;
        margin-left: 20px;
        border-radius: 5%;
        font-size: large;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .nav-link {
        display: flex;
        color: rgb(14, 234, 83);
        margin-right: 30px;
        margin-left: 30px;
    }
    .sticky-nav {
        position: sticky;
        top: 0;
        z-index: 100;
    }
    body {
        margin-top : 56px;
        margin-left: 15px;
        margin-right: 15px;
        background-image: url(background.webp);
        background-size: cover;
        background-attachment: fixed;
      }
      .bg-body-tertiary{
        background-color: rgb(17, 75, 38) !important;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);;
      }
      .container {
        background-color: rgb(35, 164, 85);
        margin-top: 10px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding-bottom: 10px;
    }

    
    .form-control {
        width: 500px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        border: 1px solid blue;
    }
    .visi-misi-title {
        display: flex;
        align-items: center;
        margin-left: 70px;
      }

      .visi-misi-title svg {
        margin-right: 10px;
      }
      .visi-misi-paragraf p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-nav bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donasi.html">Donasi</a>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="background-color: rgb(35,164,85); margin-top: 10px; border-radius: 10px; justify-content: center; display: flex;flex-direction: column;">
      <h1 style="text-align: center; margin-top: 10px; font-family : 'Kalam';">Form Pendaftaran Yayasan Tunas Insan Mulia</h1>
      <h3 style="font-family: 'Kalam'">Insan <div style="color: greenyellow; display: inline;">Islam</div>, <div style="color: yellow; display: inline;">Cerdas</div>, dan <div style="color:cyan; display: inline;">Mandiri</div></h3>
      <form action="koneksi.php" method="POST" id="myForm">
       <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" style="text-align: left;" required>
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" style="text-align: left;" required>
        </div>
        <div class="mb-3">
          <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
          <input type="text" class="form-control" id="ttl" name="ttl" style="text-align: left;" required>
        </div>
        <div class="mb-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="text" class="form-control" id="umur" name="umur" style="text-align: left;" required>
        </div>
        <div class="mb-3">
          <label for="no_tlp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" id="no_tlp" name="no_tlp" style="text-align: left;" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" style="text-align: left;" name="email">
          <div id="emailHelp" class="form-text">*Jika punya.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <p id="message" style="display: none;"></p>
      </form> 
      </div>
      <div class="container" style="background-color: rgb(35,164,85); margin-top: 10px; border-radius: 10px; justify-content: center; display: flex;flex-direction: column; font-family: 'Kalam';">
      <div class="content2" style="text-align: center; font-family: 'Kalam', cursive; padding-top: 15px;">
      <h1 style="margin-top: 10px;">SYARAT PENDAFTARAN</h1>
      <hr style="height: 5px; border: none; background-color: black;">
        <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Mengisi Formulir Pendaftaran</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy Kartu NISN 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy Raport Kelas VI SD/MI 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy SKHUN SD/MI 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy Ijazah SD/MI 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy Kartu Keluarga 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy KTP Kedua Orang Tua 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Fotocopy Akte Kelahiran 2 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Pas Photo 2 x 3 4 Lembar</p>
              </div>
            </div><br>
            <div class="visi-misi-title">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
              <div class="visi-misi-paragraf" style="text-align: left;">
                <p>Pas Photo 3 x 4 4 Lembar</p>
              </div>
            </div><br>
            <h3><div style="color:red;display:inline;">*</div>Dokumen diatas dibawa ke lokasi pendaftaran</h3>
      </div> 
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('myForm').addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            fetch('koneksi.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                document.getElementById('message').textContent = 'Anda berhasil daftar.';
                document.getElementById('message').style.display = 'block';
            })
            .catch(error => {
                console.error(error);
            });
        });
    });
</script>
  </body>
</html>
