<!DOCTYPE html>
<html>
    <head>
        <title>Form Submission</title>
    </head>
    <body>
        <!-- Form (Submitting to the same page) -->
        <form action="" method="post">
            <label >Name:</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
            <br>
            <input type="submit" value="Submit">
        </form>
        <hr>

        <?php
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            // checks if the form is submitted using the POST method
            {
                // Get the values safely
                $name = htmlspecialchars($_POST['name']);
                $age  = (int) $_POST['age'];
                echo "<h2>Hi, $name.</h2>";
                echo "<p>You are $age years old.</p>";
            }
        ?>

    </body>
</html>
