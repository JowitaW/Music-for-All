<?php
session_start();
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Music for All</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reviews.php">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
                    <li class="nav-item">
                        <span class="nav-link">Hello, <?php echo $_SESSION['user']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <button class="btn btn-login me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" name="login_email" class="form-control" id="loginEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" name="login_password" class="form-control" id="loginPassword" placeholder="Enter your password">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-modal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="login" class="btn btn-modal">Login</button>
                    </div>
                </form>

                <?php
                ob_start(); // Start output buffering
                try {
                    $db = new PDO("mysql:host=localhost;dbname=m4a", "root", "");
                    if (isset($_POST['login'])) {
                        $login_email = $_POST['login_email'];
                        $login_password = $_POST['login_password'];

                        // Fetch user from the database
                        $query = $db->prepare("SELECT * FROM register WHERE email = :email AND password = :password");
                        $query->bindParam('email', $login_email);
                        $query->bindParam('password', $login_password);
                        $query->execute();

                        if ($query->rowCount() > 0) {
                            // User found - Store user data in session
                            $user = $query->fetch(PDO::FETCH_ASSOC);
                            $_SESSION['user'] = $user['name']; // Store the username in session
                            $_SESSION['user_id'] = $user['id']; //Store the user ID in session
                            $_SESSION['logged_in'] = true;

                            // Redirect to homepage or dashboard
                            header("Location: index.php");
                            exit(); // Always exit after header redirect
                        } else {
                            echo "Invalid email or password.";
                        }
                    }
                } catch (PDOException $e) {
                    die("Database connection failed: " . $e->getMessage());
                }
                ob_end_flush(); // End output buffering and send output
                ?>
            </div>
        </div>
    </div>
</div>

<?php
// Ensure the user is logged in before showing the review form
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>

    <div class="container mt-5">
        <h3>Leave a Review</h3>
        <form method="post" action="submit_review.php">
            <div class="mb-3">
                <label for="reviewText" class="form-label">Your Review</label>
                <textarea name="review_text" class="form-control" id="reviewText" rows="3" placeholder="Write your review here..."></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating (1 to 5)</label>
                <input type="number" name="rating" class="form-control" id="rating" min="1" max="5" placeholder="Rate from 1 to 5">
            </div>
            <button type="submit" name="submit_review" class="btn btn-primary">Submit Review</button>
        </form>
    </div>

<?php else: ?>
    <p>Please <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">log in</a> to leave a review.</p>
<?php endif; ?>


<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="registerName" class="form-label">User name</label>
                        <input type="text" name="name" class="form-control" id="registerName"
                               placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="registerEmail"
                               placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="registerPassword"
                               placeholder="Enter your password">
                    </div>

                    <div class="text-center mt-3">
                        <p>Already have an account?
                            <a href="#" id="goToLogin">Login here</a>
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-modal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="send" class="btn btn-modal">Register</button>
                    </div>
                </form>
                <?php
                try {
                    $db = new PDO("mysql:host=localhost;dbname=m4a", "root", "");
                    if (isset($_POST['send'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $query = $db->prepare("INSERT INTO register (name,email,password) VALUES (:name,:email,:password)");

                        $query->bindParam('name', $name);
                        $query->bindParam('email', $email);
                        $query->bindParam('password', $password);
                        if ($query->execute()) {
                            echo "New record created successfully";
                        } else {
                            echo "Error";
                        }
                    }
                } catch (PDOException $e) {
                    die ("Could not connect to the database:" . $e->getMessage());
                }
                ?>
            </div>
        </div>
    </div>
</div>
