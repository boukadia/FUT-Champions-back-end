<?php
require 'header.html';
require 'database.php';

// if (isset($_GET['id'])) 

    $playerID = intval($_GET['id']);
    
    
    $query="SELECT players.playerID, players.photo,players.nom, club.clubName, nationality.nationalityName, players.position, players.rating, players.pace, players.shooting, players.passing, players.dribbling, players.defending, players.physical
    FROM players
    JOIN club ON players.clubID = club.clubID and playerID=$playerID
    JOIN nationality  ON players.nationalityID = nationality.nationalityID and playerID = $playerID";
    // $result=mysqli_query($connect,$query);
    $result = mysqli_query($connect,$query);
    $player = $result->fetch_assoc();
   
   ?>