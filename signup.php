<?php
    include 'db.php';
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
            $name=$_POST['name'];
            $password=$_POST['password'];
            $email=$_POST['email'];
         $sql= "INSERT INTO `myusers`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

            if (mysqli_query($conn, $sql)) {
                
                 #"New record created successfully";
                 header("location:index2.html");
            } else {
                 "Error: " . $sql . "<br>" . mysqli_error($conn);
            } 
    }
?>