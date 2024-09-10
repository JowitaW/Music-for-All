<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Music for All</title>
</head>
<body>

<nav class="navbar custom-bg">
    <div class="container-fluid">
        <a class="navbar-brand">Music for All</a>
        <div class="d-flex">
            <!-- New buttons -->
            <button class="btn btn-primary button-spacing" type="button">Log In</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
        </div>
    </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="intro-carousel-pictures/6d7193c5-9ef1-45dc-a154-7d82180887f3-cosmic-galleries-interstellar-vistas-wallpaper-1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="intro-carousel-pictures/17085.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="intro-carousel-pictures/xlnfce4crcsa1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Second carousel -->
<div id="carouselExampleAutoplaying" class="carousel slide custom-carousel">
    <div class="carousel-inner">
        <!-- First slide with multiple logos -->
        <div class="carousel-item active">
            <div class="container logo-carousel">
                <div class="row text-center">
                    <div class="col-4">
                        <img src="intro-carousel-pictures/logo1.png" class="d-block mx-auto" alt="Logo 1">
                    </div>
                    <div class="col-4">
                        <img src="intro-carousel-pictures/logo2.png" class="d-block mx-auto" alt="Logo 2">
                    </div>
                    <div class="col-4">
                        <img src="intro-carousel-pictures/logo3.png" class="d-block mx-auto" alt="Logo 3">
                    </div>
                </div>
            </div>
        </div>
        <!-- Second slide with multiple logos -->
        <div class="carousel-item">
            <div class="container logo-carousel">
                <div class="row text-center">
                    <div class="col-4">
                        <img src="intro-carousel-pictures/logo4.png" class="d-block mx-auto" alt="Logo 4">
                    </div>
                    <div class="col-4">
                        <img src="intro-carousel-pictures/logo5.png" class="d-block mx-auto" alt="Logo 5">
                    </div>
                    <div class="col-4">
                        <img src="intro-carousel-pictures/logo6.png" class="d-block mx-auto" alt="Logo 6">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls for the carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
