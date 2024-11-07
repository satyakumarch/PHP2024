<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : 'N/A';

    // Basic validation
    if (!empty($name) && !empty($email) && !empty($phone)) {
        // Store the data or process it as needed
        echo "<h3>User Details Submitted Successfully!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Address:</strong> $address</p>";
    } else {
        echo "<h3>Error: All mandatory fields are required!</h3>";
    }
} else {
    echo "<h3>Error: Invalid Request Method</h3>";
}
?>
