**FoodFusion**

- Culinary website with user authentication, community recipe sharing, cooking tips, and resource pages for culinary and educational content.

**Features**

- Authentication: Login and registration with AJAX JSON responses
- Modals: Bootstrap-powered login and registration modals
- Recipes: List, view details, and community submission form with image preview
- Tips: Share quick cooking tips (logged-in users)
- Pages: `Home`, `About Us`, `Recipe Collection`, `Community Cookbook`, `Contact Us`, `Culinary Resources`, `Educational Resources`, `Privacy`
- UI: Responsive layout using Bootstrap and custom styles

**Tech Stack**

- PHP 7.4+ and MySQL
- Bootstrap, jQuery, Popper
- XAMPP or PHP built-in server

**Project Structure**

- `index.php` — Home page
- `includes/header.php` / `includes/footer.php` — Shared layout, nav, modals
- `auth/login.php`, `auth/register.php`, `auth/logout.php` — Authentication endpoints
- `recipes.php`, `recipe.php` — Recipe listing and detail
- `community.php` — Community features and recipe submission form
- `submit_recipe.php`, `submit_tip.php` — Form handlers
- `assets/css/` — `bootstrap.min.css`, `style.css`
- `assets/js/` — `jquery-3.7.1.min.js`, `popper.min.js`, `bootstrap.min.js`, `main.js`
- `config/database.php` — Database connection settings

**Prerequisites**

- Install XAMPP (Apache + MySQL + PHP) or have PHP and MySQL installed
- Ensure `php.ini` enables `mysqli` extension

**Setup**

- Clone or place the repo under your web root, e.g. `htdocs/foodfusion`
- Create a MySQL database and user with privileges
- Update DB credentials in `config/database.php`:
  - Set host, username, password, and database name
- Start your server:
  - XAMPP: Start `Apache` and `MySQL` from the XAMPP control panel
  - PHP built-in server:
    - `php -S localhost:8000 -t /Applications/XAMPP/xamppfiles/htdocs/foodfusion`
  - Visit `http://localhost/foodfusion/` or `http://localhost:8000/`

**Database**

- Users: `id`, `first_name`, `last_name`, `email`, `password`, `created_at`
- Recipes: includes `title`, `description`, `ingredients`, `instructions`, `prep_time`, `cook_time`, `servings`, `difficulty`, `cuisine_type`, `dietary_preferences`, `image_url`, `user_id`, `is_featured`, `is_community`, `created_at`
- Cooking Tips: `id`, `user_id`, `tip_content`, `created_at`
- Tables may be auto-created by `community.php` on first run if missing, but it’s best to provision them explicitly.

**Authentication Endpoints**

- Register (AJAX JSON)
  - URL: `http://localhost/foodfusion/auth/register.php`
  - Method: `POST`
  - Headers: `X-Requested-With: XMLHttpRequest`
  - Body fields: `first_name`, `last_name`, `email`, `password`, `confirmPassword`
  - Example:
    - `curl -X POST http://localhost/foodfusion/auth/register.php -H 'X-Requested-With: XMLHttpRequest' -d 'first_name=Jane&last_name=Doe&email=jane@example.com&password=Secret123&confirmPassword=Secret123'`
- Login (AJAX JSON)
  - URL: `http://localhost/foodfusion/auth/login.php`
  - Method: `POST`
  - Headers: `X-Requested-With: XMLHttpRequest`
  - Body fields: `email`, `password`
  - Example:
    - `curl -X POST http://localhost/foodfusion/auth/login.php -H 'X-Requested-With: XMLHttpRequest' -d 'email=jane@example.com&password=Secret123'`

**Configuration**

- Paths:
  - CSS: `includes/header.php` references `assets/css/bootstrap.min.css` and `assets/css/style.css`
  - JS: include `assets/js/jquery-3.7.1.min.js`, `assets/js/popper.min.js`, `assets/js/bootstrap.min.js`, `assets/js/main.js` in `includes/footer.php`
- Update site name and branding in `includes/header.php`

**Usage Notes**

- Modals: Login and registration modals are triggered from the header; AJAX responses show inline success/error messages
- Community: Logged-in users can submit recipes with ingredient/instruction dynamic fields and optional image preview
- Resources: Visit `Culinary Resources` and `Educational Resources` from navigation for downloadable guides and video listings

**Development**

- CSS changes in `assets/css/style.css`
- JS behavior in `assets/js/main.js` (modals, form submissions, interactivity)
- PHP pages and handlers as listed above

**Known Considerations**

- Ensure Bootstrap data attributes are consistent (`data-toggle` vs `data-bs-toggle`) based on version; this repo uses Bootstrap 4 patterns in core layout
- If you modify DB schemas (e.g., removing `username`), update display references accordingly (e.g., `community.php` cards)

**Troubleshooting**

- White screen or 500 errors:
  - Check `error_log` and enable `display_errors` in `php.ini` for development
  - Verify DB credentials in `config/database.php`
- AJAX returns HTML instead of JSON:
  - Ensure the `X-Requested-With` header is set and the endpoint sets `Content-Type: application/json`
- Modals not appearing:
  - Verify JS includes order and no console errors; check `data-toggle` targets match IDs
