<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the guest name from the form
    $guestName = $_POST["guestName"];

    // Your email configuration
    $to = "scmente207@gmail.com"; // Replace with your email address
    $subject = "RSVP Confirmation";
    $message = "Thank you, $guestName, for RSVPing to the wedding! We look forward to seeing you.";

    // Send the email
    mail($to, $subject, $message);

    // Redirect the user to a thank you page
    header("Location: thank_you.html"); // Create a thank_you.html page
    exit();
}
?>
