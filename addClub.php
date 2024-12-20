<?php
include "database.php";


    
    $clubName = $_POST['clubName'];
    $clubUrl = $_POST['clubPhoto'];

    

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $query = "INSERT INTO club (clubName, clubPhoto) VALUES ('$clubName', '$clubUrl')";
    
    if (mysqli_query($connect, $query)) {
        echo "New club added successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);

?>
