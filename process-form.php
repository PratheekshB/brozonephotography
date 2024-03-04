<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $place = $_POST["place"];
    $func = $_POST["function"];
    $dates = $_POST["dates"];
    
    // Recipient email address
    $to = "bhandarypratheeksh@gmail.com"; // Change this to your admin's email address
    
    // Subject
    $subject = "New Booking Form Submission";

    // Email content
    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Place: $place\n";
    $message .= "Function: $func\n";
    $message .= "Preferred Dates: $dates\n";

    // Additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
