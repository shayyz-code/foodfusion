<?php
// Include database connection
require_once 'config/database.php';

// Include header
include_once 'includes/header.php';

// Check if recipe ID is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $recipe_id = $_GET['id'];
    
    // Get recipe details
    $recipe_query = "SELECT * FROM recipes WHERE id = ?";
    $stmt = mysqli_prepare($conn, $recipe_query);
    mysqli_stmt_bind_param($stmt, "i", $recipe_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) > 0) {
        $recipe = mysqli_fetch_assoc($result);
    } else {
        // Recipe not found
        echo '<div class="container py-5 text-center">
                <div class="alert alert-danger">
                    <h4>Recipe Not Found</h4>
                    <p>The recipe you are looking for does not exist or has been removed.</p>
                    <a href="recipes.php" class="btn btn-primary">Back to Recipes</a>
                </div>
              </div>';
        include_once 'includes/footer.php';
        exit;
    }
} else {
    // No recipe ID provided
    echo '<div class="container py-5 text-center">
            <div class="alert alert-warning">
                <h4>No Recipe Selected</h4>
                <p>Please select a recipe to view its details.</p>
                <a href="recipes.php" class="btn btn-primary">Browse Recipes</a>
            </div>
          </div>';
    include_once 'includes/footer.php';
    exit;
}
?>

<!-- Recipe Detail Section -->
<section class="recipe-detail py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><?php echo $recipe['title']; ?></h1>
                
                <div class="recipe-meta mb-4">
                    <span class="mr-3"><i class="fas fa-utensils"></i> <?php echo $recipe['cuisine_type']; ?></span>
                    <span class="mr-3"><i class="fas fa-leaf"></i> <?php echo $recipe['dietary_pref']; ?></span>
                    <span class="mr-3"><i class="fas fa-clock"></i> Prep: <?php echo $recipe['prep_time']; ?> mins</span>
                    <span class="mr-3"><i class="fas fa-fire"></i> Cook: <?php echo $recipe['cook_time']; ?> mins</span>
                    <span><i class="fas fa-chart-line"></i> 
                        <span class="badge badge-<?php 
                            echo $recipe['difficulty'] == 'Easy' ? 'success' : 
                                ($recipe['difficulty'] == 'Medium' ? 'warning' : 'danger'); 
                        ?>">
                            <?php echo $recipe['difficulty']; ?>
                        </span>
                    </span>
                </div>
                
                <div class="recipe-image mb-4">
                    <img src="<?php echo $recipe['image_path']; ?>" alt="<?php echo $recipe['title']; ?>" class="img-fluid rounded">
                </div>
                
                <div class="recipe-description mb-4">
                    <h4>Description</h4>
                    <p><?php echo $recipe['description']; ?></p>
                </div>
                
                <div class="recipe-ingredients mb-4">
                    <h4>Ingredients</h4>
                    <ul class="list-group">
                        <?php
                        $ingredients = explode("\n", $recipe['ingredients']);
                        foreach ($ingredients as $ingredient) {
                            if (!empty(trim($ingredient))) {
                                echo '<li class="list-group-item">' . $ingredient . '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                
                <div class="recipe-instructions">
                    <h4>Instructions</h4>
                    <ol class="instruction-list">
                        <?php
                        $instructions = explode("\n", $recipe['instructions']);
                        foreach ($instructions as $instruction) {
                            if (!empty(trim($instruction))) {
                                echo '<li class="mb-3">' . $instruction . '</li>';
                            }
                        }
                        ?>
                    </ol>
                </div>
                
                <!-- Recipe Rating and Comments Section -->
                <div class="recipe-rating-comments mt-5">
                    <h4>Ratings & Comments</h4>
                    
                    <!-- Rating Form -->
                    <div class="rating-form mb-4">
                        <form action="rate_recipe.php" method="post">
                            <input type="hidden" name="recipe_id" value="<?php echo $recipe_id; ?>">
                            <div class="form-group">
                                <label>Rate this recipe:</label>
                                <div class="rating-stars mb-2">
                                    <i class="far fa-star" data-value="1"></i>
                                    <i class="far fa-star" data-value="2"></i>
                                    <i class="far fa-star" data-value="3"></i>
                                    <i class="far fa-star" data-value="4"></i>
                                    <i class="far fa-star" data-value="5"></i>
                                    <input type="hidden" name="rating" id="rating-value" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">Your Comment:</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Rating</button>
                        </form>
                    </div>
                    
                    <!-- Comments Display -->
                    <div class="comments-section">
                        <h5>User Comments</h5>
                        <div class="comment-list">
                            <!-- Sample comments - in a real app, these would be loaded from the database -->
                            <div class="comment-item p-3 mb-3 bg-light rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>John Doe</h6>
                                    <div class="rating-display">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="mb-1">This recipe was amazing! I made it for my family and everyone loved it.</p>
                                <small class="text-muted">Posted on October 15, 2023</small>
                            </div>
                            
                            <div class="comment-item p-3 mb-3 bg-light rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Jane Smith</h6>
                                    <div class="rating-display">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="mb-1">Good recipe, but I had to adjust the seasoning to my taste.</p>
                                <small class="text-muted">Posted on October 10, 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Recipe Sharing -->
                <div class="recipe-sharing bg-light p-4 rounded mb-4">
                    <h4>Share This Recipe</h4>
                    <div class="social-sharing mt-3">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-info mr-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-danger mr-2"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="btn btn-outline-success"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                
                <!-- Recipe Print/Save -->
                <div class="recipe-actions bg-light p-4 rounded mb-4">
                    <h4>Recipe Actions</h4>
                    <div class="action-buttons mt-3">
                        <a href="#" class="btn btn-outline-secondary btn-block mb-2" onclick="window.print()"><i class="fas fa-print"></i> Print Recipe</a>
                        <a href="#" class="btn btn-outline-primary btn-block mb-2"><i class="far fa-bookmark"></i> Save Recipe</a>
                        <a href="#" class="btn btn-outline-success btn-block"><i class="fas fa-shopping-basket"></i> Add to Shopping List</a>
                    </div>
                </div>
                
                <!-- Similar Recipes -->
                <div class="similar-recipes bg-light p-4 rounded">
                    <h4>You Might Also Like</h4>
                    <?php
                    // Get similar recipes based on cuisine type
                    $similar_query = "SELECT id, title, image_path FROM recipes 
                                     WHERE cuisine_type = ? AND id != ? 
                                     ORDER BY RAND() LIMIT 3";
                    $stmt = mysqli_prepare($conn, $similar_query);
                    mysqli_stmt_bind_param($stmt, "si", $recipe['cuisine_type'], $recipe_id);
                    mysqli_stmt_execute($stmt);
                    $similar_result = mysqli_stmt_get_result($stmt);
                    
                    if (mysqli_num_rows($similar_result) > 0) {
                        while ($similar = mysqli_fetch_assoc($similar_result)) {
                    ?>
                        <div class="similar-recipe-item d-flex align-items-center mt-3">
                            <img src="<?php echo $similar['image_path']; ?>" alt="<?php echo $similar['title']; ?>" class="img-fluid rounded mr-3" style="width: 80px; height: 60px; object-fit: cover;">
                            <a href="recipe.php?id=<?php echo $similar['id']; ?>"><?php echo $similar['title']; ?></a>
                        </div>
                    <?php
                        }
                    } else {
                        echo '<p class="mt-3">No similar recipes found.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More Recipes Section -->
<section class="more-recipes bg-light py-5">
    <div class="container">
        <h3 class="text-center mb-4">Explore More Recipes</h3>
        <div class="row">
            <?php
            // Get random recipes
            $random_query = "SELECT id, title, image_path, cuisine_type, difficulty FROM recipes 
                           WHERE id != ? ORDER BY RAND() LIMIT 3";
            $stmt = mysqli_prepare($conn, $random_query);
            mysqli_stmt_bind_param($stmt, "i", $recipe_id);
            mysqli_stmt_execute($stmt);
            $random_result = mysqli_stmt_get_result($stmt);
            
            if (mysqli_num_rows($random_result) > 0) {
                while ($random = mysqli_fetch_assoc($random_result)) {
            ?>
                <div class="col-md-4 mb-4">
                    <div class="card recipe-card h-100">
                        <img src="<?php echo $random['image_path']; ?>" class="card-img-top" alt="<?php echo $random['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $random['title']; ?></h5>
                            <div class="recipe-meta">
                                <span><i class="fas fa-utensils"></i> <?php echo $random['cuisine_type']; ?></span>
                                <span><i class="fas fa-chart-line"></i> 
                                    <span class="badge badge-<?php 
                                        echo $random['difficulty'] == 'Easy' ? 'success' : 
                                            ($random['difficulty'] == 'Medium' ? 'warning' : 'danger'); 
                                    ?>">
                                        <?php echo $random['difficulty']; ?>
                                    </span>
                                </span>
                            </div>
                            <a href="recipe.php?id=<?php echo $random['id']; ?>" class="btn btn-primary mt-3">View Recipe</a>
                        </div>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<?php
// Include footer
include_once 'includes/footer.php';
?>