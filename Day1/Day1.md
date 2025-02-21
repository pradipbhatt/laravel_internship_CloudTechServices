
# Day 1: PHP Recall & Laravel Installation

## Objective:
- Recap PHP basics and understand its core features.
- Install and set up Laravel on the local machine for the upcoming project.

### 1. PHP Basics Overview

 #### Introduction to PHP

What is PHP? 
PHP (Hypertext Preprocessor) is a widely-used open-source server-side scripting language, primarily used for web development. It can be embedded into HTML to create dynamic web pages. PHP is executed on the server, and the result is sent to the client's browser.

#### What Can PHP Do?
- Create dynamic content that interacts with databases.
- Handle forms and user input.
- Manage sessions and cookies.
- Send and receive cookies.
- Work with various file types, including images and text files.




2. Basic PHP Syntax

Here is a quick overview of PHP syntax:

PHP Tags:
PHP code is embedded in HTML using `<?php ... ?>`.

```php
<?php
    echo "Hello, There who is reviewing my code <3!";
?>
```
### Variables:

Variables are declared using the `$` sign and can hold different data types like strings, integers, etc.
They are like the containers holding the data or values.

```php
<?php
    $name = "Pradip Bhatt";
    $age = 25;
    echo $name . " is " . $age . " years old.";
?>
```

### Echo and Print:

`echo` and `print` are used to output content.just like we use the document.write() int the javascript.

```php
<?php
    echo "Hello, World!";
    print "This is a print statement!";
?>
```

## 3. Your First PHP-Enabled Page

### Creating a Simple PHP File:

1. Create a file called `day1.php`.
2. Write the following PHP code inside the file:

```php
<!DOCTYPE html>
<html>
    <head>
        <title>My First PHP Page</title>
    </head>
    <body>
        <?php
            echo "<h1>Welcome to PHP!</h1>";
            echo "<p>This is your first PHP page.</p>";
        ?>
    </body>
</html>
```

### Accessing the PHP Page:

* Run a local web server like XAMPP or use PHP's built-in server to view the page in your browser.

```bash
php -S hrlocalhost:3000
```

---

## 4. Dealing with Forms in PHP

Handling forms is one of PHP's powerful features. Here's how you can deal with a simple form and process the data submitted by the user.

### Form Creation and Processing:

#### HTML Form:

A simple form where the user can submit their name and age.

```html
<form action="process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required>
    <br>
    <input type="submit" value="Submit">
</form>
```

#### Processing the Form in PHP same file:

```php
        <!-- Form (Submitting to the same page) -->
        <form action="" method="post">   <!-- Step 1: Create a form with POST method yaha action="" garyau vane form will be submitted to the same page or current oage  -->
            <label >Name:</label>  <!-- Step 2: Create a label for the input field -->
            <input type="text" name="name" id="name" required>
            <br>
            <!-- Step 3: Create an input field for the name with required attribute name="name" vaneko attribute used while sending the form ani ID is used for linking the label for form validation -->

            <label for="age">Age:</label>
            <!-- Step 4: Create a label for the input field -->
            <input type="number" name="age" id="age" required>

            <!-- Step 5: Create an input field for the age with required attribute name="age" vaneko attribute used while sending the form ani ID is used for linking the label for form validation -->
            <br>

            <input type="submit" value="Submit">
            <!-- Step 6: Create a submit button -->
        </form>

        <hr>

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST")  
        // checks if the form is submitted using the POST method
         {
            // Get the values safely
            $name = htmlspecialchars($_POST['name']);
            $age = (int) $_POST['age'];
            // htmlspecialchars() is used to prevent XSS attacks
            // (int) is used to convert the value to an integer
            // Display the values
            // Display the results below the form

            // Display the results below the form
            echo "<h2>Hi, $name.</h2>";
            echo "<p>You are $age years old.</p>";
        }
        ?>
```

### Explanation:

* The form sends a POST request to Same file.
* PHP retrieves and sanitizes the `name` and `age` using `$_POST` and `htmlspecialchars()`.
* The data is then displayed back to the user.

---

## 5. Installing Laravel

Laravel is a popular PHP framework used for building modern web applications. It provides various features like routing, templating, ORM (Eloquent), and more.

### Steps for Installing Laravel:

#### Install Composer:

Composer is a dependency manager for PHP. You need it to install Laravel.

* Download Composer from [here](https://getcomposer.org/).
* Follow the installation instructions for your OS.

#### Install Laravel:

* Open your terminal (or command prompt) and run the following command to install Laravel:

```bash
composer global require laravel/installer
```

#### Create a New Laravel Project:

After installing Laravel, create a new project by running:

```bash
laravel new my-laravel-app
```

#### Start Laravel Development Server:

Navigate to the newly created project directory and start the Laravel development server:

```bash
cd my-laravel-app
php artisan serve
```

The Laravel app will be accessible at `http://localhost:8000`.

#### Verify the Installation:

Open your browser and go to `http://localhost:8000`. You should see the Laravel welcome page.

---

## 6. What's Next?

* **Explore Laravel Routes:** Learn how to define routes in Laravel to handle different types of requests.
* **Database and Eloquent:** Dive into Laravel's ORM (Eloquent) for interacting with databases and learn how to migrate and seed data.
* **Blade Templating:** Explore Laravel's Blade templating engine for cleaner views.
* **Authentication and Authorization:** Implement user authentication using Laravel's built-in features.

---

## Conclusion

On  **Day 1** , we covered the fundamentals of PHP, learned to create and process forms, and set up Laravel for development. These basics will serve as the foundation for more advanced PHP and Laravel topics in the coming days.Echo and Print:
