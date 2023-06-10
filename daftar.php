<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-nav">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>