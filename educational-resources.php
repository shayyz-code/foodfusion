<?php
// Include database connection
require_once 'config/database.php';

// Include header
include 'includes/header.php';
?>

<!-- Educational Resources Hero Section -->
<section class="hero-section educational-hero">
    <div class="container text-center py-5">
        <h1 class="display-4">Educational Resources</h1>
        <p class="lead">Learn about renewable energy and sustainable cooking practices with our downloadable resources.</p>
    </div>
</section>

<!-- Renewable Energy Basics Section -->
<section class="energy-basics-section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Renewable Energy Basics</h2>
        <p class="section-description mb-4">Understand the fundamentals of renewable energy and how it relates to sustainable cooking.</p>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/solar-energy.jpg" class="card-img-top" alt="Solar Energy">
                    <div class="card-body">
                        <h5 class="card-title">Solar Energy Guide</h5>
                        <p class="card-text">Learn how solar energy works and how it can be used in cooking applications.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download mr-1"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/wind-energy.jpg" class="card-img-top" alt="Wind Energy">
                    <div class="card-body">
                        <h5 class="card-title">Wind Energy Basics</h5>
                        <p class="card-text">Discover how wind power contributes to sustainable energy systems.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download mr-1"></i> Download PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="assets/images/biomass-energy.jpg" class="card-img-top" alt="Biomass Energy">
                    <div class="card-body">
                        <h5 class="card-title">Biomass Energy</h5>
                        <p class="card-text">Explore how organic materials can be converted into sustainable energy.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-download mr-1"></i> Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Infographics Section -->
<section class="infographics-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4">Infographics</h2>
        <p class="section-description mb-4">Visual guides to help you understand complex energy concepts.</p>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card infographic-card">
                    <img src="assets/images/carbon-footprint-infographic.jpg" class="card-img-top" alt="Carbon Footprint of Foods">
                    <div class="card-body">
                        <h5 class="card-title">Carbon Footprint of Common Foods</h5>
                        <p class="card-text">Compare the environmental impact of different food choices.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Infographic</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card infographic-card">
                    <img src="assets/images/energy-efficient-cooking-infographic.jpg" class="card-img-top" alt="Energy Efficient Cooking">
                    <div class="card-body">
                        <h5 class="card-title">Energy-Efficient Cooking Methods</h5>
                        <p class="card-text">Learn which cooking methods use the least amount of energy.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Infographic</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card infographic-card">
                    <img src="assets/images/seasonal-foods-infographic.jpg" class="card-img-top" alt="Seasonal Foods Guide">
                    <div class="card-body">
                        <h5 class="card-title">Seasonal Foods Guide</h5>
                        <p class="card-text">A visual calendar of when foods are in season for more sustainable eating.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Infographic</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card infographic-card">
                    <img src="assets/images/food-waste-infographic.jpg" class="card-img-top" alt="Reducing Food Waste">
                    <div class="card-body">
                        <h5 class="card-title">Reducing Food Waste</h5>
                        <p class="card-text">Tips and strategies to minimize food waste in your kitchen.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Infographic</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Educational Videos Section -->
<section class="edu-videos-section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Educational Videos</h2>
        <p class="section-description mb-4">Watch our informative videos on renewable energy topics.</p>
        
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card video-card h-100">
                    <div class="video-thumbnail">
                        <img src="assets/images/solar-cooking-video.jpg" class="card-img-top" alt="Solar Cooking Video">
                        <a href="#" class="video-play-button">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Introduction to Solar Cooking</h5>
                        <p class="card-text">Learn how to harness the sun's energy to cook delicious meals.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <small class="text-muted"><i class="far fa-clock mr-1"></i> 15:20 minutes</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card video-card h-100">
                    <div class="video-thumbnail">
                        <img src="assets/images/energy-efficient-kitchen-video.jpg" class="card-img-top" alt="Energy Efficient Kitchen Video">
                        <a href="#" class="video-play-button">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Creating an Energy-Efficient Kitchen</h5>
                        <p class="card-text">Tips for reducing energy consumption in your kitchen.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <small class="text-muted"><i class="far fa-clock mr-1"></i> 12:45 minutes</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card video-card h-100">
                    <div class="video-thumbnail">
                        <img src="assets/images/sustainable-eating-video.jpg" class="card-img-top" alt="Sustainable Eating Video">
                        <a href="#" class="video-play-button">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sustainable Eating Practices</h5>
                        <p class="card-text">How your food choices impact the environment and what you can do about it.</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <small class="text-muted"><i class="far fa-clock mr-1"></i> 18:30 minutes</small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All Videos</a>
        </div>
    </div>
</section>

<!-- Sustainable Cooking Guides Section -->
<section class="guides-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title mb-4">Sustainable Cooking Guides</h2>
        <p class="section-description mb-4">Comprehensive resources for eco-friendly cooking practices.</p>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-leaf text-primary mr-2"></i> Zero-Waste Cooking Guide</h5>
                        <p class="card-text">Learn how to utilize every part of your ingredients and minimize kitchen waste.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Guide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-seedling text-primary mr-2"></i> Plant-Based Cooking Starter Guide</h5>
                        <p class="card-text">A beginner's guide to incorporating more plant-based meals into your diet.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Guide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-water text-primary mr-2"></i> Water Conservation in the Kitchen</h5>
                        <p class="card-text">Practical tips for reducing water usage while cooking and cleaning.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-download mr-1"></i> Download Guide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-bolt text-primary mr-2"></i> Energy-Saving Cooking Techniques</h5>
                        <p class="card-text">Methods and practices to reduce energy consumption while preparing meals.</p>
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