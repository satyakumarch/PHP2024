<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];

    $nameErr = $emailErr = $addressErr = $genderErr = "";

    // Validation for Name
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and spaces are allowed in the name.";
    }

    // Validation for Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
    }

    // Validation for Address
    if (empty($address)) {
        $addressErr = "Address is required.";
    }

    // Validation for Gender
    if (empty($gender)) {
        $genderErr = "Gender is required.";
    }

    // Redirect back to form with error messages if there are any
    if (!empty($nameErr) || !empty($emailErr) || !empty($addressErr) || !empty($genderErr)) {
        header("Location: index.php?nameErr=" . urlencode($nameErr) .
               "&emailErr=" . urlencode($emailErr) .
               "&addressErr=" . urlencode($addressErr) .
               "&genderErr=" . urlencode($genderErr));
        exit();
    }

    // Display validated data if no errors
    echo "<h3>Form Submitted Successfully</h3>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
}
?>
