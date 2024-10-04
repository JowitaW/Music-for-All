<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    header("Location: index.php");
    exit();
}

// Connect to the database
try {
    $db = new PDO("mysql:host=localhost;dbname=m4a", "root", "");
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch user details
$user = null;
if (isset($_SESSION['user'])) {
    $query = $db->prepare("SELECT * FROM register WHERE name = :name");
    $query->bindParam(':name', $_SESSION['user']);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
}

// Update user details
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $updateQuery = $db->prepare("UPDATE register SET name = :name, email = :email, password = :password WHERE id = :id");
    $updateQuery->bindParam(':name', $name);
    $updateQuery->bindParam(':email', $email);
    $updateQuery->bindParam(':password', $password);
    $updateQuery->bindParam(':id', $user['id']);

    if ($updateQuery->execute()) {
        $_SESSION['user'] = $name;
        echo "<script>alert('Profile updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating profile. Please try again later.');</script>";
    }
}

// Delete user account
if (isset($_POST['delete'])) {
    $deleteQuery = $db->prepare("DELETE FROM register WHERE id = :id");
    $deleteQuery->bindParam(':id', $user['id']);

    if ($deleteQuery->execute()) {
        session_destroy();
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Error deleting account. Please try again later.');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>User Profile</title>
</head>
<body>

<!-- Navbar -->
<?php include_once "general.php"; ?>

<!-- User Profile Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center">User Profile</h3>

            <?php if ($user): ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $user['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $user['email']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="<?php echo $user['password']; ?>" required>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
                        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account? This action is irreversible.');">Delete Account</button>
                    </div>
                </form>
            <?php else: ?>
                <p class="text-center">User details not found. Please try again later.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="mt-5">
    <div class="container text-center">
        <p>&copy; 2024 Music for All. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
