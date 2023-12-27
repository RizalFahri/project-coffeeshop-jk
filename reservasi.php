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
        <div class="collapse navbar-collapse ms-auto custom-ul-li" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="reservasi.php">RESERVASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide custom-carousel-2" data-bs-ride="carousel">
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h2 class="text-center">Selamat Datang di Coffee Shop Kami</h2>
                    <p class="text-center">Nikmati pengalaman kopi terbaik di tempat kami. Silakan melakukan reservasi untuk menikmati hidangan lezat kami.</p>

                    <h3 class="mt-4">Formulir Reservasi</h3>
                    <form>
                        <div class="mb-3">
                            <label for="customer-name" class="form-label">Nama Pelanggan:</label>
                            <input type="text" class="form-control" id="customer-name" name="customer-name" required>
                        </div>
                        <div class="mb-3">
                            <label for="table-number" class="form-label">Nomor Meja:</label>
                            <input type="number" class="form-control" id="table-number" name="table-number" required>
                        </div>
                        <div class="mb-3">
                            <label for="menu" class="form-label">Pilih Menu:</label>
                            <select class="form-select" id="menu" name="menu" required>
                                <option value="Espresso">Espresso</option>
                                <option value="Cappuccino">Cappuccino</option>
                                <option value="Latte">Latte</option>
                                <option value="Mocha">Mocha</option>
                                <option value="Americano">Americano</option>
                            </select>
                        </div>
                        <button type="button" class="custom-button" onclick="submitReservation()">Reservasi</button>
                    </form>

                    <div class="mt-4" id="welcome-message"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>