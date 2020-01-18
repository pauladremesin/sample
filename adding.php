<?php
    include_once('connection.php');

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $role = $_POST['role'];


    $sql = "INSERT INTO admin_list (name, contact, Email, role) VALUES ('$name','$contact','$email','$role');";
    mysqli_query($conn, $sql);


    header("Location: ./admin.php");


    ?>