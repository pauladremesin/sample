<?php
    include_once('connection.php');


    $sql = "SELECT * FROM admin_list;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          
          
          
          echo $row['name'] ;
          echo $row['contact'];
          echo $row['email'];
          echo $row['role'];

          


        }
    }

?>