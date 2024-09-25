
# Duraface Solutions

# Overview
Duraface Solutions is a web application designed for managing and displaying product information. It uses a custom MVC architecture and integrates various features such as product management, file uploads, and downloadable datasheets.

# Table of Contents

* Features
* Technologies
* Configuration
* Usage
* File Structure
* Contributing


# Features
* Product Management: Add, update, and delete products with associated images.
* File Uploads: Handle file uploads for product images with support for common image formats.
* Product Details: View detailed information about each product.
* Downloadable Datasheets: Provide datasheets for products and allow users to download them.
* Custom MVC Architecture: Implemented using a custom MVC framework.

# Technologies
* PHP: Server-side scripting language.
* MySQL: Database management system.
* Bootstrap: CSS framework for responsive design.
* XAMPP: Development environment for PHP and MySQL.

# Installation

* Navigate to the Project Directory

# Set Up the Database 
* Import the provided database.sql file into your MySQL server.
* Update database connection settings in application/config/config.php.

# Install Dependencies

* Ensure that you have PHP and MySQL installed on your machine.
* Install necessary PHP extensions if not already installed.
# Start the Development Server

* Use XAMPP to start Apache and MySQL services.
* Place the project directory in the htdocs directory of XAMPP.
# Configuration
Database Configuration
* Update your database credentials in application/config/config.php.

<?php
// Define database connection constants
define('HOST', 'localhost');          // Database host
define('USER', 'root');               // Database username
define('DATABASE', 'duraface-solutions');     // Database name
define('PASSWORD', '');               // Database password

// Define base URL constant
define('BASEURL', 'http://localhost/Duraface-Solutions'); // Base URL of the application
?>

# File Upload Configuration

* Ensure the system/classes/assets/images/ directory is writable for file uploads.

# Usage
* Access the Application 
- Open your browser and navigate to: http://localhost/Duraface-Solutions

# Managing Products

* Add a Product: Navigate to the product management page and fill out the form to add a new product.
* Edit a Product: Click on the edit button next to the product you want to update.
* Delete a Product: Click on the delete button next to the product you want to remove.

# Downloading Datasheets

* Click on the "Download Datasheet" button available on the product details page to download the PDF datasheet.

# File Structure
* application/ - Contains application-specific code and configuration files.
* assets/ - Contains CSS, and image files.
* libraries/ - Custom libraries and third-party integrations.
* views/ - HTML templates for displaying content.
* controllers/ - PHP files handling HTTP requests and responses.
* models/ - PHP files for database interactions and business logic.
