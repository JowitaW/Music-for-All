<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Reviews - Music for All</title>
</head>
<body>

<!-- Navbar -->
<?php
include_once "general.php";
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1>Product Reviews</h1>
        <p>Share your experiences and read reviews from others about our range of musical instruments.</p>
    </div>
</section>

<!-- Reviews Form Section -->
<section class="feature-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4">
                    <h3 class="card-title text-center">Submit Your Review</h3>
                    <form action="submit_review.php" method="post">
                        <div class="mb-3">
                            <label for="product" class="form-label">Select Product</label>
                            <select class="form-control" id="product" name="product" required>
                                <option value="" disabled selected>Select a product</option>
                                <option value="Piano">Piano</option>
                                <option value="Guitar">Guitar</option>
                                <option value="Drums">Drums</option>
                                <option value="Violin">Violin</option>
                                <option value="Flute">Flute</option>
                                <option value="Trumpet">Trumpet</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select class="form-control" id="rating" name="rating" required>
                                <option value="" disabled selected>Select rating</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="5">5 Stars</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Review</label>
                            <textarea class="form-control" id="review" name="review" rows="5" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-modal">Submit Review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Existing Reviews Section -->
<section class="feature-section">
    <div class="container">
        <h3 class="text-center">Customer Reviews</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Piano</h5>
                        <p><strong>John Doe:</strong> ⭐⭐⭐⭐⭐ The piano is amazing! Great sound quality and very versatile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Guitar</h5>
                        <p><strong>Jane Smith:</strong> ⭐⭐⭐⭐ The guitar is fantastic, though it took a bit to get used to the action.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Drums</h5>
                        <p><strong>Emily Johnson:</strong> ⭐⭐⭐⭐⭐ Perfect for my needs. The sound is rich and vibrant!</p>
                    </div>
                </div>
            </div>
            <!-- Add more reviews as needed -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2024 Music for All. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
