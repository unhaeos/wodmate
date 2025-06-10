<?php
$page_title = "Home";
$current_page = "home";
include 'includes/header.php';
?>

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h2>Track Your CrossFit Workouts</h2>
            <p>Record your WODs, track your progress, and manage your fitness journey with WOD MATE.</p>
            
        </div>
        <div class="hero-image">
            <img src="images/app-screenshot.png" alt="WOD MATE App Screenshot">
        </div>
    </div>
</section>

<section class="features-overview">
    <div class="container">
        <h2>Key Features</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Record WODs</h3>
                <p>Easily record and track your daily workouts with simple, intuitive logging.</p>
            </div>
            <div class="feature-item">
                <h3>Track Progress</h3>
                <p>Monitor your CrossFit Total and weightlifting records to see your growth.</p>
            </div>
            <div class="feature-item">
                <h3>Easy Search</h3>
                <p>Quickly find your past workouts with powerful search functionality.</p>
            </div>
        </div>
        <div class="cta-center">
            <a href="features" class="btn secondary-btn">Learn More</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>