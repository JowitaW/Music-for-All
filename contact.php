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
    <title>Contact Us - Music for All</title>
</head>
<body>

<!-- Navbar -->
<?php
include_once "general.php";
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We would love to hear from you! Feel free to send us a message with your queries or feedback.</p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="feature-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card p-4">
                    <h3 class="card-title text-center">Get in Touch</h3>
                    <form action="submit_contact.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-modal">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
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
