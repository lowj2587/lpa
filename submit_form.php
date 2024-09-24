<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $message = sanitize_input($_POST["message"]);

    // Validate form data
    $errors = validate_form($name, $email, $message);

    if (empty($errors)) {
        // Write data to a text file
        $file = 'submissions.txt';
        $current = file_get_contents($file);
        $current .= "Name: $name\nEmail: $email\nMessage: $message\n\n";
        if (file_put_contents($file, $current)) {
            echo "Thank you for contacting us. We will get back to you shortly.";
        } else {
            echo "Sorry, there was an error saving your message. Please try again later.";
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate form data
function validate_form($name, $email, $message) {
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    return $errors;
}
?>
