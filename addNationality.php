<?php
include "database.php";


    
    $nationalityName = $_POST['nationalityName'];
    $nationalityPhoto = $_POST['nationalityPhoto'];

    

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $query = "INSERT INTO nationality (nationalityName, nationalityPhoto) VALUES ('$nationalityName', '$nationalityPhoto')";
    
    if (mysqli_query($connect, $query)) {
        echo "New club added successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);

?>
