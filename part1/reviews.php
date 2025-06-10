<?php
$page_title = "Reviews";
$current_page = "reviews";
$include_js = true;
$js_file = "js/reviews.js";
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h2>User Reviews</h2>
    </div>
</section>

<section class="featured-review-section">
    <div class="container">
        <h3>Featured Review</h3>
        <div id="featured-review" class="featured-review">
            <div class="loading-placeholder">
                <div class="loading-line"></div>
                <div class="loading-line"></div>
                <div class="loading-line"></div>
            </div>
        </div>
        <p class="review-note">Reviews change every 5 seconds</p>
    </div>
</section>

<section class="reviews-section">
    <div class="container">
        <div class="reviews-header">
            <h3>All Reviews</h3>
            <div class="rating-display">
                <span>Average Rating: </span>
                <span id="average-rating" class="rating-number">0.0</span>
                <span>/5</span>
            </div>
        </div>
        
        <div class="rating-filters">
            <button class="filter-btn active" data-rating="all">All Reviews</button>
            <button class="filter-btn" data-rating="5">5 Star</button>
            <button class="filter-btn" data-rating="4">4 Star</button>
            <button class="filter-btn" data-rating="3">3 Star</button>
            <button class="filter-btn" data-rating="2">2 Star</button>
            <button class="filter-btn" data-rating="1">1 Star</button>
        </div>
        
        <div id="reviews-container" class="reviews-grid">
            <div class="loading-placeholder">
                <div class="loading-line"></div>
                <div class="loading-line"></div>
                <div class="loading-line"></div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>