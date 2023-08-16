<?php
// Step 1: Establish a connection to the database (replace these values with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tournee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 2: Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $rating = $_POST["rating"];

    // Step 3: Sanitize and validate form data (you can add more validation if needed)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($message);
    $rating = (int)$rating;

    // Step 4: Insert data into the database
    $sql = "INSERT INTO feedbacks (name, email, message, rating) VALUES ('$name', '$email', '$message', $rating)";

    if ($conn->query($sql) === TRUE) {
        header("Location:feedback.php");
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>