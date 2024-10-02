
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
                <li class="nav-item">
                    <button class="btn btn-login me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">Register
                    </button>
                </li>
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
                <form>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword"
                               placeholder="Enter your password">
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p>Don't have an account?
                        <a href="#" id="goToRegister">Register here</a>
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-modal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-modal">Login</button>
            </div>
        </div>
    </div>
</div>

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