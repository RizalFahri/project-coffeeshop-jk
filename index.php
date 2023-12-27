<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COFEESHOP | HOME</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg justify-content-end custom-navbar px-5">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="Logo" height="24" class="d-inline-block align-text-top">
      </a>
    </div>
    <div class="collapse navbar-collapse ms-auto custom-ul-li " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservasi.php">RESERVASI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/car-1.png" class="d-block w-100 custom-carousel-img" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="img/car-2.png" class="d-block w-100 custom-carousel-img" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="img/car-3.png" class="d-block w-100 custom-carousel-img" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container mx-auto custom-isi">
    <p class="txt-judul">SELAMAT DATANG DI COFEESHOP KAMI</p>
    <p class="txt-paragraf">Kami sangat senang bisa menjadi bagian dari perjalanan kopi Anda. Di sini, kami berkomitmen untuk memberikan pengalaman kopi yang istimewa. Nikmati aroma segar biji kopi terbaik dan pilihan menu kopi spesial yang kami hadirkan dengan cinta dan dedikasi.
    </p>
    <p class="txt-paragraf">
      Setiap cangkir kopi adalah cerita unik, dan kami berusaha menciptakan pengalaman yang tak terlupakan setiap kali Anda mengunjungi. Rasakan kehangatan suasana, temukan rasa yang menggoda, dan berbagi momen istimewa bersama kami.
    </p>
    <p class="txt-paragraf">
      Terima kasih telah memilih kami sebagai tempat untuk menikmati kopi dan berbagi kebahagiaan. Mari bersama-sama menikmati perjalanan cita rasa kopi yang tak terbatas.</p>
    <p class="txt-paragraf">
      Selamat menikmati setiap tegukan!
    </p>
    <p class="txt-paragraf">
      Tim Coffeeshop
    </p>
    <p class="txt-subjudul">LAKUKAN RESERVASI SEKARANG</p>
    <a href="reservasi.php" class="custom-button-a">
      <button type="button" class="custom-button">RESERVASI SEKARANG</button>
    </a>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>