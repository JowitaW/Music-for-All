<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Music for All</title>
</head>
<body>

<!-- Navbar -->
<?php
include_once "nav.php";
?>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <h1>Feel the Music</h1>
        <p>Discover new songs, explore genres, and let music bring you together. Join now , share your favorites, and connect with other music lovers.</p>
        <button class="btn btn-register mt-4" data-bs-toggle="modal" data-bs-target="#registerModal">Get Started</button>
    </div>
</div>

<!-- Features Section -->
<div class="feature-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Discover New Music</h5>
                        <p class="card-text">Explore thousands of songs and albums across different genres.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Create Playlists</h5>
                        <p class="card-text">Organize your favorite tracks and share them with friends.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Join the Community</h5>
                        <p class="card-text">Connect with other music enthusiasts and share your passion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2024 Music for All. All Rights Reserved.</p>
    </div>
</footer>




</body>
</html>
