<?php
include "database.php";


    
    $nationalityName = $_POST['nationalityName'];
    $nationalityPhoto = $_POST['nationalityPhoto'];

    

    
    $query = "INSERT INTO nationality (nationalityName, nationalityPhoto) VALUES ('$nationalityName', '$nationalityPhoto')";
    
    $result=mysqli_query($connect, $query);
    mysqli_close($connect);
        header("Location: admin.php");
    

?>
