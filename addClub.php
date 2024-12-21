<?php
include "database.php";


    
    $clubName = $_POST['clubName'];
    $clubUrl = $_POST['clubPhoto'];

    

   
    $query = "INSERT INTO club (clubName, clubPhoto) VALUES ('$clubName', '$clubUrl')";
    
    $result=mysqli_query($connect, $query);
    mysqli_close($connect);
        header("Location: admin.php");
      
   
    

?>
