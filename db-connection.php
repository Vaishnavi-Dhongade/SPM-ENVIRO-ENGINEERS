<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "smpcontact";

      $conn = mysqli_connect($servername, $username, $password, $database);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $query = "INSERT INTO `smpclientdata` (`name`, `phone`, `email`, `serviceneed`, `message`) VALUES ('$name', '$phone', '$email', '$service', '$message');";

    $output = mysqli_query($conn, $query);
    if ($output) {
        echo '<script>alert("Success! Your message has been successfully sent. We will get back to you shortly.");';
        echo 'window.location.href = "index.html";</script>';
    }
    else{
        echo "Data is not inserted";
    }
}
?>