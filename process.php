<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Display the data
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Nameeee: " . $name . "<br>";
    echo "Emailllll: " . $email . "<br>";
    echo "Messageeeee: " . $message;
}
?>
