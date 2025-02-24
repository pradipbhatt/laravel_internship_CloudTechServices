<!DOCTYPE html> <!-- Step 1: Define the document type as HTML -->
<html> <!-- Step 2: Start the HTML document -->
    <head> <!-- Step 3: Start the head section of the HTML document -->
        <title> More Information </title> <!-- Step 4: Set the title of the HTML document -->
    </head> <!-- Step 5: End the head section -->
    <body> <!-- Step 6: Start the body section of the HTML document -->
    <?php
    // Step 7: Start PHP code block
    // Step 8: Check if the 'HTTP_USER_AGENT' contains the string 'Brave'
    if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Brave')) {
    ?>
    <h3>str_contains() returned true</h3> <!-- Step 9: Display message if condition is true -->
    <p>You are using Brave</p> <!-- Step 10: Display browser-specific message if condition is true -->
    <?php
    } else {
    ?>
    <h3>str_contains() returned false</h3> <!-- Step 11: Display message if condition is false -->
    <p>You are not using Brave</p> <!-- Step 12: Display browser-specific message if condition is false -->
    <?php
    }
    // Step 13: End PHP code block
    ?>
    </body> <!-- Step 14: End the body section -->
</html> <!-- Step 15: End the HTML document -->