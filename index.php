<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatatan Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
  <!-- <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    <img src="img/Logo Chatatan Group Black.jpg" alt="Bootstrap"  height="50">
  </a> -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="img/logo.jpg" alt="Bootstrap" height="50" >
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#planboard">Planboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Menu</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">ChatatanGroup</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="take.php">Take</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="production.php" >Production</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload.php">Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="done.php">Done Upload</a>
            </li>
          </ul>
        </div>
      </div>
  

      <!-- Beranda -->
       <section id="beranda">

           <div class="container vh-100" >
            <div class="row vh-100 justify-content-center align-items-center">
              <div class="col-sm-6">
                <h1>Selamat Datang Di ChatatanGroup</h1>
              </div>

              <div class="col-sm-6">
                <img src="img/ChatatanGroup.jpg" class="img-fluid"  alt="">
              </div>
            </div>
               
            </div>
        </section>

      <section id="planboard" style="background-color: #fe5325;">
        <div class="container vh-100 pt-5">
            <h1 class="text-white">Planboard</h1>
        </div>
      </section>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>