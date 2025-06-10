document.addEventListener('DOMContentLoaded', function() {

    fetch('reviews.json')
        .then(response => response.json())
        .then(data => {

            const allReviews = data;

            const fiveStarReviews = allReviews.filter(review => review.stars === 5);

            const totalRating = allReviews.reduce((sum, review) => sum + review.stars, 0);
            const averageRating = totalRating / allReviews.length;

            document.getElementById('average-rating').textContent = averageRating.toFixed(1);
            
            let currentIndex = 0;
            const featuredReviewElement = document.getElementById('featured-review');
            
            function showFeaturedReview() {
                if (fiveStarReviews.length > 0) {
                    const review = fiveStarReviews[currentIndex];
                    const userName = review.user.name || "Anonymous User";
                    
                    featuredReviewElement.innerHTML = `
                        <div class="review-header">
                            <h4>${userName}</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <p class="review-text">${review.review_content || review.review_title}</p>
                        <p class="review-date">${new Date(review.date).toLocaleDateString()}</p>
                    `;
                    
                    currentIndex = (currentIndex + 1) % fiveStarReviews.length;
                } else {
                    featuredReviewElement.innerHTML = `
                        <p>No 5-star reviews available.</p>
                    `;
                }
            }
            
            showFeaturedReview();

            setInterval(showFeaturedReview, 5000);

            displayReviews(allReviews);

            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const rating = this.getAttribute('data-rating');

                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
              
                    if (rating === 'all') {
                        displayReviews(allReviews);
                    } else {
                        const ratingNumber = parseInt(rating);
                        const filteredReviews = allReviews.filter(review => review.stars === ratingNumber);
                        displayReviews(filteredReviews);
                    }
                });
            });
        })
        .catch(error => {
            console.error('Error loading reviews:', error);
            document.getElementById('reviews-container').innerHTML = `
                <div class="error-message">
                    <p>Error loading reviews: ${error.message}</p>
                </div>
            `;
            document.getElementById('featured-review').innerHTML = `
                <div class="error-message">
                    <p>Error loading reviews: ${error.message}</p>
                </div>
            `;
        });
    
    function displayReviews(reviews) {
        const container = document.getElementById('reviews-container');
        
        if (reviews.length === 0) {
            container.innerHTML = `
                <div class="error-message">
                    <p>No reviews found for this rating.</p>
                </div>
            `;
            return;
        }
        
        let html = '';
        
        reviews.forEach(review => {
            const date = new Date(review.date).toLocaleDateString();
            const stars = '★'.repeat(review.stars) + '☆'.repeat(5 - review.stars);
            const userName = review.user.name || "Anonymous User";
            const reviewContent = review.review_content || "";
            
            html += `
                <div class="review-card">
                    <div class="review-header">
                        <h4>${userName}</h4>
                        <div class="stars">${stars}</div>
                    </div>
                    <p class="review-text">${reviewContent}</p>
                    <p class="review-date">${date}</p>
                </div>
            `;
        });
        
        container.innerHTML = html;
    }
});