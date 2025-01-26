<?php
    $conn = mysqli_connect("localhost", "root", "root", "iinfinityai");

    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }

    if (isset($_REQUEST['submit'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
    


    $sql = "INSERT INTO users(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    mysqli_query($conn, $sql);
    }
?>