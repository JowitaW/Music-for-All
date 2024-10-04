<?php
session_start();

if (isset($_POST['submit_review']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // Assuming 'user_id' is stored in session after login
    $review_text = $_POST['review_text'];
    $rating = $_POST['rating'];

    try {
        // Connect to the database
        $db = new PDO("mysql:host=localhost;dbname=m4a", "root", "");

        // Prepare the query to insert the review
        $query = $db->prepare("INSERT INTO reviews (user_id, review_text, rating) VALUES (:user_id, :review_text, :rating)");

        // Bind parameters
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':review_text', $review_text);
        $query->bindParam(':rating', $rating);

        // Execute the query
        if ($query->execute()) {
            echo "Review submitted successfully.";
            // Redirect to the reviews page or reload
            header("Location: reviews.php");
            exit();
        } else {
            echo "Error submitting review.";
        }
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>

<?php
// Connect to the database
try {
    $db = new PDO("mysql:host=localhost;dbname=m4a", "root", "");

    // Fetch all reviews
    $query = $db->prepare("SELECT r.review_text, r.rating, r.created_at, u.name FROM reviews r JOIN register u ON r.user_id = u.id ORDER BY r.created_at DESC");
    $query->execute();
    $reviews = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Display the reviews
if ($reviews):
    foreach ($reviews as $review): ?>
        <div class="review">
            <h5><?php echo htmlspecialchars($review['name']); ?> (Rating: <?php echo $review['rating']; ?>/5)</h5>
            <p><?php echo htmlspecialchars($review['review_text']); ?></p>
            <small>Submitted on: <?php echo $review['created_at']; ?></small>
        </div>
        <hr>
    <?php endforeach;
else:
    echo "No reviews yet.";
endif;
?>
