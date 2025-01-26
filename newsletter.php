<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "root", "iinfinityai");

// Check connection
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if form is submitted and email is set
if (isset($_POST['email'])) {
    // Escape special characters to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Prepare the SQL statement
    $sql = "INSERT INTO emails (email) VALUES ('$email')";

    // Execute the query and check for errors
    if (mysqli_query($conn, $sql)) {
        echo "Email inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {

}

// Close the database connection
mysqli_close($conn);
?>
