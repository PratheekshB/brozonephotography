<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $place = htmlspecialchars($_POST["place"]);
    $function = htmlspecialchars($_POST["function"]);
    $dates = htmlspecialchars($_POST["dates"]);
    $owner_email = htmlspecialchars($_POST["owner_email"]);

    // Construct email message
    $subject = "New Booking from BroZone Photography";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nPlace: $place\nFunction: $function\nPreferred Dates: $dates";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    mail($owner_email, $subject, $message, $headers);

    // Optionally, you can send a confirmation email to the user
    $user_subject = "Booking Confirmation from BroZone Photography";
    $user_message = "Thank you for booking with BroZone Photography. We will get back to you soon.";

    mail($email, $user_subject, $user_message, $headers);

    // Redirect to a confirmation page
    header("Location: confirmation.php?success=true");
    exit();
}
?>
