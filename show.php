
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Card</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
        }
        .player-card {
            background: #fff;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .player-header {
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: white;
            text-align: center;
            padding: 20px;
        }
        .player-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 3px solid white;
        }
        .player-header h3 {
            margin: 0;
        }
        .player-header p {
            margin: 5px 0;
            font-size: 14px;
        }
        .player-body {
            padding: 20px;
        }
        .player-body .stat {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .player-body .stat span {
            font-weight: bold;
        }
        .player-footer {
            text-align: center;
            background: #f8f9fa;
            padding: 15px;
            font-size: 14px;
        }
        .player-footer a {
            text-decoration: none;
            color: #007bff;
        }
        .player-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
include "database.php";
include "header.html";


$query = "SELECT players.playerID, players.nom, players.photo, club.clubPhoto, nationality.nationalityPhoto, 
                 players.position, players.rating, players.pace, players.shooting, players.passing, 
                 players.dribbling, players.defending, players.physical
          FROM players
          JOIN club ON players.clubID = club.clubID
          JOIN nationality ON players.nationalityID = nationality.nationalityID";

$result = mysqli_query($connect, $query);
?>

<?php while($row = $result->fetch_assoc()) {?>
    <div class="player-card">
       
        <div class="player-header">
            <img src="<?php echo htmlspecialchars($row['photo']); ?>" alt="Player Photo">
            <img src="<?php echo htmlspecialchars($row['nationalityPhoto']); ?>" alt="Player Photo">
            <img src="<?php echo htmlspecialchars($row['clubPhoto']); ?>" alt="Player Photo">
            <h3><?php echo htmlspecialchars($row['nom']); ?></h3>
         
        </div>

  
        <div class="player-body">
            <div class="stat">
                <span>Rating:</span>
                <span><?php echo htmlspecialchars($row['rating']); ?></span>
            </div>
            <div class="stat">
                <span>Pace:</span>
                <span><?php echo htmlspecialchars($row['pace']); ?></span>
            </div>
            <div class="stat">
                <span>Shooting:</span>
                <span><?php echo htmlspecialchars($row['shooting']); ?></span>
            </div>
            <div class="stat">
                <span>Passing:</span>
                <span><?php echo htmlspecialchars($row['passing']); ?></span>
            </div>
            <div class="stat">
                <span>Dribbling:</span>
                <span><?php echo htmlspecialchars($row['dribbling']); ?></span>
            </div>
            <div class="stat">
                <span>Defending:</span>
                <span><?php echo htmlspecialchars($row['defending']); ?></span>
            </div>
            <div class="stat">
                <span>Physical:</span>
                <span><?php echo htmlspecialchars($row['physical']); ?></span>
            </div>
        </div>

    
        <div class="player-footer">
            <a href="#">Edit Player</a>
        </div>
    </div>
<?php  }?>
</body>
</html>
