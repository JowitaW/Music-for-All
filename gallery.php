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
include_once "general.php";
?>

<!-- Carousel Header -->
<div class="carousel-container">
    <div class="carousel-header">
        <h2>Explore Our Musical Instruments</h2>
        <p>Discover a range of musical instruments through our carousel. Each instrument showcases its unique characteristics and charm. Whether you're passionate about the piano, guitar, drums, or any other instrument, take a look and share your thoughts!</p>
    </div>

    <!-- Carousel -->
    <div id="cardsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/piano-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Piano</h5>
                                <p class="card-text">The piano is a versatile instrument with both acoustic and digital variants, known for its ability to produce a wide range of sounds from classical to jazz. If you've had an experience with different types of pianos, feel free to leave a review and share your thoughts!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/guitar-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Guitar</h5>
                                <p class="card-text">From the resonant acoustic to the electrifying tones of the electric guitar, this instrument spans numerous genres and styles. Tried different guitar models? Leave a review and help others find their perfect fit!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/drums-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Drums</h5>
                                <p class="card-text">Drums form the rhythmic backbone of many musical ensembles, with various types like snare, bass, and toms each offering unique sounds. Played different kinds of drums? Drop a review and share your experience!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/violin-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Violin</h5>
                                <p class="card-text">The violin is a string instrument known for its expressive sound, whether in classical orchestras or folk fiddle traditions. If you've explored different violin variants, leave a review to guide others in their musical journey!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/flute-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Flute</h5>
                                <p class="card-text">Flutes, with their sweet and airy tones, range from the piccolo to the deeper alto and bass flutes. If you’ve had the chance to play or hear these flute types, leave a review and share your feedback!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/trumpet-6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Trumpet</h5>
                                <p class="card-text">The trumpet is a brass instrument with a bold, clear tone that cuts through both classical and jazz music. Experienced the differences in trumpet variants? Share your thoughts in a review to help fellow musicians!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#cardsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#cardsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
