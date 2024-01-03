<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Confirmation</title>
</head>
<body>

<?php
$success = isset($_GET["success"]) ? $_GET["success"] : null;

if ($success === "true") {
    echo '<div style="color: green;">Form submitted successfully! Thank you for booking with BroZone Photography.</div>';
} elseif ($success === "false") {
    echo '<div style="color: red;">Error submitting the form. Please try again.</div>';
} else {
    echo '<div style="color: gray;">Invalid response. Please try again.</div>';
}
?>

</body>
</html>
