<footer class="bg-dark text-white mt-5 py-4">
        <div class="container">
            <div class="row">
                <!-- Social Media Links -->
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Connect With Us</h5>
                    <div class="social-links mt-3">
                        <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-white mr-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white mr-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white mr-3"><i class="fab fa-pinterest fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="index.php" class="text-white">Home</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                        <li><a href="recipes.php" class="text-white">Recipe Collection</a></li>
                        <li><a href="community.php" class="text-white">Community Cookbook</a></li>
                    </ul>
                </div>
                
                <!-- Legal Links -->
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Legal</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="privacy.php" class="text-white">Privacy Policy</a></li>
                        <li><a href="terms.php" class="text-white">Terms of Use</a></li>
                        <li><a href="#" class="text-white cookie-settings">Cookie Settings</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div class="col-md-3">
                    <h5>Newsletter</h5>
                    <p class="small">Subscribe to get the latest recipes and cooking tips</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <hr class="bg-secondary">
            
            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> FoodFusion. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Cookie Consent Banner -->
    <div class="cookie-consent-banner" id="cookieConsentBanner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="mb-md-0">We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies. <a href="privacy.php">Learn more</a></p>
                </div>
                <div class="col-md-4 text-md-right">
                    <button class="btn btn-sm btn-outline-light mr-2 cookie-settings">Cookie Settings</button>
                    <button class="btn btn-sm btn-primary accept-cookies">Accept</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
    <!-- Fix for mobile navigation -->
    <script>
        $(document).ready(function() {
            $('.navbar-toggler').click(function() {
                $('#navbarNav').toggleClass('show');
            });
        });
    </script>
</body>
</html>