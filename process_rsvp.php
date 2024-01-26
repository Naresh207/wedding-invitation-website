<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guestName = $_POST["guestName"]; // Replace "guestName" with the actual name attribute of your form input
    // Add more variables for other form fields as needed

    // Process the data (you can save it to a database, send emails, etc.)

    // For now, let's just echo the submitted data
    echo "RSVP received from: " . $guestName;
} else {
    // Redirect if the form is accessed directly without submission
    header("Location: index.html");
    exit();
}

?>
