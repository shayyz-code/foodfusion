<?php
// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'foodfusion');

// Attempt to connect to MySQL database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Check connection
if (!$conn) {
    die("ERROR: Could not connect to MySQL. " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if (mysqli_query($conn, $sql)) {
    // Select the database
    mysqli_select_db($conn, DB_NAME);
} else {
    die("ERROR: Could not create database. " . mysqli_error($conn));
}

// Create tables
$tables = [
    "CREATE TABLE IF NOT EXISTS users (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    
    "CREATE TABLE IF NOT EXISTS recipes (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        user_id INT,
        title VARCHAR(100) NOT NULL,
        description TEXT NOT NULL,
        ingredients TEXT NOT NULL,
        instructions TEXT NOT NULL,
        cuisine_type VARCHAR(50) NOT NULL,
        dietary_pref VARCHAR(50) NOT NULL,
        difficulty VARCHAR(20) NOT NULL,
        prep_time INT NOT NULL,
        cook_time INT NOT NULL,
        image_path VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
    )",
    
    "CREATE TABLE IF NOT EXISTS events (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(100) NOT NULL,
        description TEXT NOT NULL,
        event_date DATE NOT NULL,
        image_path VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )",
    
    "CREATE TABLE IF NOT EXISTS news (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(100) NOT NULL,
        content TEXT NOT NULL,
        image_path VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )"
];

// Execute each table creation query
foreach ($tables as $table) {
    if (!mysqli_query($conn, $table)) {
        echo "ERROR: Could not create table. " . mysqli_error($conn) . "<br>";
    }
}

// Insert sample data for testing
function insertSampleData($conn) {
    // Sample events
    $events = [
        "INSERT IGNORE INTO events (title, description, event_date, image_path) VALUES 
        ('Italian Cooking Workshop', 'Learn to make authentic Italian pasta from scratch with Chef Mario.', '2023-12-15', 'assets/images/events/italian_workshop.jpg')",
        "INSERT IGNORE INTO events (title, description, event_date, image_path) VALUES 
        ('Vegan Baking Masterclass', 'Discover the secrets of delicious vegan desserts with our expert pastry chef.', '2023-12-20', 'assets/images/events/vegan_baking.jpg')",
        "INSERT IGNORE INTO events (title, description, event_date, image_path) VALUES 
        ('Asian Fusion Cooking', 'Explore the exciting flavors of Asian fusion cuisine in this hands-on cooking class.', '2024-01-10', 'assets/images/events/asian_fusion.jpg')"
    ];
    
    // Sample news
    $news = [
        "INSERT IGNORE INTO news (title, content, image_path) VALUES 
        ('Seasonal Ingredients for Fall', 'Discover the best ingredients to use this fall season and how to incorporate them into your cooking.', 'assets/images/news/fall_ingredients.jpg')",
        "INSERT IGNORE INTO news (title, content, image_path) VALUES 
        ('Cooking Techniques: Sous Vide', 'Learn about the sous vide cooking technique and how it can elevate your home cooking.', 'assets/images/news/sous_vide.jpg')",
        "INSERT IGNORE INTO news (title, content, image_path) VALUES 
        ('Healthy Meal Prep Ideas', 'Get inspired with these healthy and delicious meal prep ideas for busy weekdays.', 'assets/images/news/meal_prep.jpg')"
    ];
    
    // Sample recipes
    $recipes = [
        "INSERT IGNORE INTO recipes (title, description, ingredients, instructions, cuisine_type, dietary_pref, difficulty, prep_time, cook_time, image_path) VALUES 
        ('Classic Margherita Pizza', 'A simple yet delicious Italian classic with fresh basil and mozzarella.', 
        'Pizza dough, San Marzano tomatoes, Fresh mozzarella, Fresh basil, Olive oil, Salt', 
        '1. Preheat oven to 500°F. 2. Roll out dough. 3. Add toppings. 4. Bake for 10-12 minutes.', 
        'Italian', 'Vegetarian', 'Easy', 20, 12, 'assets/images/recipes/margherita.jpg')",
        
        "INSERT IGNORE INTO recipes (title, description, ingredients, instructions, cuisine_type, dietary_pref, difficulty, prep_time, cook_time, image_path) VALUES 
        ('Vegetable Curry', 'A flavorful and spicy vegetable curry that\'s perfect for weeknight dinners.', 
        'Mixed vegetables, Coconut milk, Curry paste, Garlic, Ginger, Onion, Vegetable broth', 
        '1. Sauté onions, garlic, and ginger. 2. Add curry paste. 3. Add vegetables and liquids. 4. Simmer until vegetables are tender.', 
        'Indian', 'Vegan', 'Medium', 15, 30, 'assets/images/recipes/veg_curry.jpg')",
        
        "INSERT IGNORE INTO recipes (title, description, ingredients, instructions, cuisine_type, dietary_pref, difficulty, prep_time, cook_time, image_path) VALUES 
        ('Chocolate Lava Cake', 'Decadent chocolate cake with a molten center, perfect for dessert lovers.', 
        'Dark chocolate, Butter, Eggs, Sugar, Flour, Vanilla extract', 
        '1. Melt chocolate and butter. 2. Mix in other ingredients. 3. Pour into ramekins. 4. Bake at 425°F for 12-14 minutes.', 
        'French', 'Vegetarian', 'Medium', 15, 14, 'assets/images/recipes/lava_cake.jpg')"
    ];
    
    // Execute sample data insertion
    foreach (array_merge($events, $news, $recipes) as $query) {
        mysqli_query($conn, $query);
    }
}

// Insert sample data
insertSampleData($conn);

return $conn;
?>