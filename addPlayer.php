<?php
include 'database.php';
$playerName=$_POST['playerName'];
$playerPhoto=$_POST['playerPhoto'];
$clubName=$_POST['clubName'];
$nationalityName=$_POST['nationalityName'];
$position=$_POST['position'];
$pace=$_POST['pace'];
$shooting=$_POST['shooting'];
$passing=$_POST['passing'];
$dribbling=$_POST['dribbling'];
$defending=$_POST['defending'];
$physical=$_POST['physical'];
$rating=$_POST['rating'];
$query="INSERT INTO players(nom,photo,clubID,nationalityID,rating,shooting,passing,pace,dribbling,defending,physical,position)
            VALUES('$playerName','$playerPhoto',
            '$clubName','$nationalityName','$rating',
            '$shooting','$passing','$pace','$dribbling',
            '$defending','$physical','$position')";
$result= mysqli_query($connect,$query);
?>