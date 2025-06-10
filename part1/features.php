<?php
$page_title = "Features";
$current_page = "features";
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h2>WOD MATE Features</h2>
    </div>
</section>

<section class="feature-section">
    <div class="container">
        <div class="feature-block">
            <div class="feature-image">
                <img src="images/app-screenshot1.png" alt="Daily WOD Recording Screenshot">
            </div>
            <div class="feature-description">
                <h3>Daily WOD Recording</h3>
                <p>Easily record your Workout of the Day (WOD) with our simple interface.</p>
                <ul>
                    <li>Set workout type (For time, AMRAP, EMOM, Strength)</li>
                    <li>Record your time or rep count</li>
                    <li>Upload workout photos</li>
                    <li>Add notes about how the workout felt</li>
                </ul>
            </div>
        </div>
        
        <div class="feature-block reverse">
            <div class="feature-image">
                <img src="images/app-screenshot2.png" alt="WOD Logs Screenshot">
            </div>
            <div class="feature-description">
                <h3>WOD Log Management</h3>
                <p>Track all your workouts in one place with powerful organization tools.</p>
                <ul>
                    <li>Chronologically sorted workout entries</li>
                    <li>Keyword search functionality</li>
                    <li>Edit and delete capabilities</li>
                    <li>Visualization of workout data</li>
                </ul>
            </div>
        </div>
        
        <div class="feature-block">
            <div class="feature-image">
                <img src="images/app-screenshot3.png" alt="Performance Tracking Screenshot">
            </div>
            <div class="feature-description">
                <h3>Performance Tracking</h3>
                <p>Monitor your progress and track your personal records over time.</p>
                <ul>
                    <li>CrossFit Total tracking (Shoulder Press, Deadlift, Back Squat)</li>
                    <li>Weightlifting records (Snatch, Clean & Jerk, Clean)</li>
                    <li>Statistics viewing (First WOD date, Total WODs)</li>
                    <li>Personal record management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h3>Start Tracking Your Progress Today</h3>
    </div>
</section>

<?php include 'includes/footer.php'; ?>