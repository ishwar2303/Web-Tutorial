<?php 
    require_once('connection.php');

    $sql = "INSERT INTO `user_registration` (`registration_id`, `user_name`, `user_email`, `user_password`) VALUES (NULL, '$_GET[fullname]', '$_GET[userEmail]', '$_GET[userPassword]');";
    
    //mysqli_query($conn, $sql); // procedural method
    $conn->query($sql);  // object oriented method
    echo 'Data inserted';
?>