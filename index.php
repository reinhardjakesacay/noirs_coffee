<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Coffee Shop</title>
</head>
<body>

    
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="images/logo.png" alt="Bootstrap" width="65" height="65">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-light">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-light">About</a></li>
                <li><a href="#" class="nav-link px-2 link-light">Menu</a></li>
                <li><a href="#" class="nav-link px-2 link-light">Apps</a></li>
                <li><a href="#" class="nav-link px-2 link-light">Contact</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn me-2 btn-custom">Login</button>
                <button type="button" class="btn btn-custom">Sign-up</button>
            </div>
        </header>
    </div>

    <div class="container col-xxl-8 px-4 py-3">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            </div>
            <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-light">Start your day with a black coffee</h1>
                    <p class="lead text-light">choose and taste delicious coffee from the best beans</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-lg px-4 me-md-2 btn-custom">Order Now</button>
                    <button type="button" class="btn btn-lg px-4 btn-custom">Learn About Us</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <!-- card 1 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/espresso.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Espresso</h5>
                                            <p class="card-text">150.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/doubleEspresso.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Double Espresso</h5>
                                            <p class="card-text">300.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 3 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/tripleEspresso.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Triple Espresso</h5>
                                            <p class="card-text">450.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="row justify-content-center">
                        <!-- card 1 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/americano.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Americano</h5>
                                            <p class="card-text">100.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/latte.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Latte</h5>
                                            <p class="card-text">225.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 3 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/mocha.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Mocha</h5>
                                            <p class="card-text">200.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <!-- card 1 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/icedAmericano.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Iced Americano</h5>
                                            <p class="card-text">105.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 2 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/icedLatte.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Iced Latte</h5>
                                            <p class="card-text">230.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card 3 -->
                        <div class="col-md-3">
                            <div class="card mb-3" style="max-width: 300px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/icedCoffee.jpg" class="img-fluid rounded-start" alt="..." style="width: 120px; height: 120px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Iced Coffee</h5>
                                            <p class="card-text">35.00 Php</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


</body>
</html>