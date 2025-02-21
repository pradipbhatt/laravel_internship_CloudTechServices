<!DOCTYPE html>
<html>
    <head>
        <title>Form Submission</title>
    </head>
    <body>

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

    </body>
</html>
