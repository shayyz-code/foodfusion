<?php
// Include database connection
require_once 'config/database.php';

// Include header
include 'includes/header.php';
?>

<!-- Culinary Resources Hero Section -->
<section class="hero-section culinary-hero">
    <div class="container text-center py-5">
        <h1 class="display-4">Culinary Resources</h1>
        <p class="lead">Enhance your cooking skills with our downloadable recipe cards, tutorials, and instructional videos.</p>
    </div>
</section>

<!-- Recipe Cards Section -->
<section class="recipe-cards-section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Downloadable Recipe Cards</h2>
        <p class="section-description mb-4">Print these beautifully designed recipe cards to build your physical cookbook collection.</p>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/recipe-card-1.jpg" class="card-img-top" alt="Classic Pasta Recipe Card">
                    <div class="card-body">
                        <h5 class="card-title">Classic Pasta Collection</h5>
                        <p class="card-text">5 essential pasta recipes every home cook should master.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download mr-1"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/recipe-card-2.jpg" class="card-img-top" alt="Baking Basics Recipe Card">
                    <div class="card-body">
                        <h5 class="card-title">Baking Basics</h5>
                        <p class="card-text">Essential recipes for cookies, cakes, and breads with detailed instructions.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download mr-1"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/recipe-card-3.jpg" class="card-img-top" alt="Healthy Meals Recipe Card">
                    <div class="card-body">
                        <h5 class="card-title">30-Minute Healthy Meals</h5>
                        <p class="card-text">Quick and nutritious recipes for busy weeknights.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download mr-1"></i> Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cooking Tutorials Section -->
<section class="tutorials-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4">Cooking Tutorials</h2>
        <p class="section-description mb-4">Step-by-step guides to master essential cooking techniques.</p>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card tutorial-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/images/knife-skills.jpg" class="card-img" alt="Knife Skills Tutorial">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Knife Skills 101</h5>
                                <p class="card-text">Learn proper cutting techniques to improve your efficiency and safety in the kitchen.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card tutorial-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/images/sauce-basics.jpg" class="card-img" alt="Sauce Basics Tutorial">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sauce Basics</h5>
                                <p class="card-text">Master the five mother sauces and elevate your cooking instantly.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card tutorial-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/images/baking-science.jpg" class="card-img" alt="Baking Science Tutorial">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Baking Science</h5>
                                <p class="card-text">Understand the chemistry behind baking for consistently perfect results.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card tutorial-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/images/meal-prep.jpg" class="card-img" alt="Meal Prep Tutorial">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Meal Prep Mastery</h5>
                                <p class="card-text">Learn how to efficiently prepare meals for the entire week in just a few hours.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instructional Videos Section -->
<section class="videos-section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Instructional Videos</h2>
        <p class="section-description mb-4">Watch our detailed video tutorials on various cooking techniques and kitchen hacks.</p>
        
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card video-card h-100">
                    <div class="video-thumbnail">
                        <img src="assets/images/video-thumbnail-1.jpg" class="card-img-top" alt="Perfect Steak Video">
                        <a href="#" class="video-play-button">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">How to Cook the Perfect Steak</h5>
                        <p class="card-text">Learn the techniques for achieving restaurant-quality steak at home.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <small class="text-muted"><i class="far fa-clock mr-1"></i> 12:45 minutes</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card video-card h-100">
                    <div class="video-thumbnail">
                        <img src="assets/images/video-thumbnail-2.jpg" class="card-img-top" alt="Bread Baking Video">
                        <a href="#" class="video-play-button">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Artisan Bread Baking</h5>
                        <p class="card-text">Master the art of baking crusty, delicious bread with simple techniques.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <small class="text-muted"><i class="far fa-clock mr-1"></i> 18:30 minutes</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card video-card h-100">
                    <div class="video-thumbnail">
                        <img src="assets/images/video-thumbnail-3.jpg" class="card-img-top" alt="Kitchen Hacks Video">
                        <a href="#" class="video-play-button">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">10 Essential Kitchen Hacks</h5>
                        <p class="card-text">Time-saving tricks and tips to make cooking easier and more efficient.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <small class="text-muted"><i class="far fa-clock mr-1"></i> 8:15 minutes</small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All Videos</a>
        </div>
    </div>
</section>

<!-- Kitchen Equipment Guide Section -->
<section class="equipment-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4">Kitchen Equipment Guide</h2>
        <p class="section-description mb-4">Downloadable guides to help you choose the right tools for your kitchen.</p>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-utensils text-primary mr-2"></i> Essential Kitchen Tools</h5>
                        <p class="card-text">A comprehensive guide to the must-have tools for every home kitchen, from knives to pots and pans.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Guide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-blender text-primary mr-2"></i> Small Appliance Buying Guide</h5>
                        <p class="card-text">How to choose the right blenders, food processors, and other small appliances for your cooking needs.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include 'includes/footer.php';
?>