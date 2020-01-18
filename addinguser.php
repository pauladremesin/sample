<?php
    include_once('connection.php');

    $first = $_POST['first'];
    $last = $_POST['last']; 
    $Email = $_POST['Email'];
    $Add = $_POST['Add'];
    $Contact = $_POST['Contact'];
    $Pwd = $_POST['Pwd'];


    $sql = "INSERT INTO users_list (FirstName, LastName, email, Address, Contact, password) VALUES ('$first','$last','$Email','$Add','$Contact','$Pwd');";
    mysqli_query($conn, $sql);


    header("Location: ./users.php");


    ?>