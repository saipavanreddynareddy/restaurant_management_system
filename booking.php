<?php
include 'db.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];
    $sql= "INSERT INTO `reservation` ( `name`, `email`, `phone`, `date`, `time`, `guests`, `message`) VALUES ( '$name', '$email', '$phone', '$date', '$time', '$guests', '$message')";

    if (mysqli_query($conn, $sql)) {
    #"New record created successfully";
    header("location:booking1.html");
    }  
     else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}

    
?>
