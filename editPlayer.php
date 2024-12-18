<?php
require 'header.html';
require 'database.php';

// if (isset($_GET['id'])) 
{
    $playerID = intval($_GET['id']);
    
    
    $query="SELECT players.playerID, players.nom, club.clubName, nationality.nationalityName, players.position, players.rating, players.pace, players.shooting, players.passing, players.dribbling, players.defending, players.physical
    FROM players
    JOIN club ON players.clubID = club.clubID and playerID=$playerID
    JOIN nationality  ON players.nationalityID = nationality.nationalityID and playerID = $playerID";
    $result=mysqli_query($connect,$query);
   
    // $stmt = $connect->prepare($query);
    // $stmt->bind_param("i", $playerID);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // if ($result->num_rows > 0) {
    //     // Fetch player data
    //     $player = $result->fetch_assoc();
    // } else {
    //     echo "Joueur non trouvé.";
    //     exit();
    // }

//     $stmt->close();
// } else {
//     echo "ID du joueur manquant.";
//     exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le joueur</title>
</head>
<body>

    <div id="form" class="container">
      <h3 id="form-title">Edit Player</h3>
      <form action="" method="POST">
          <input class="form-control mb-2" type="" name="playerID" value="<?php echo htmlspecialchars($result['players.playerID']); ?>">

          <input
              type="text"
              class="form-control mb-2"
              value="<?php echo htmlspecialchars($result['players.nom']); ?>"
              name="playerName"
              placeholder="Player Name"
              required
          />
          
          <input
              type="url"
              class="form-control mb-2"
              name="playerPhoto"
              value="<?php echo htmlspecialchars($result['players.photo']); ?>"
              placeholder="Player Photo URL"
          />
        
          <input class="form-control mb-2" type="text" name="nationalityName" value="<?php echo htmlspecialchars($result['nationality.nationalityName']); ?>" >

          <input class="form-control mb-2" type="text" name="position" value="<?php echo htmlspecialchars($result['players.position']); ?>">

          <input class="form-control mb-2" type="text" name="clubName" value="<?php echo htmlspecialchars($result['club.clubName']); ?>">

          <input
              type="number"
              class="form-control mb-2"
              name="pace"
              value="<?php echo htmlspecialchars($result['players.pace']); ?>"
              placeholder="Pace"
              required
          />
          <input
              type="number"
              class="form-control mb-2"
              name="shooting"
              value="<?php echo htmlspecialchars($result['players.shooting']); ?>"
              placeholder="Shooting"
              required
          />
          <input
              type="number"
              class="form-control mb-2"
              name="passing"
              value="<?php echo htmlspecialchars($result['players.passing']); ?>"
              placeholder="Passing"
              required
          />
          <input
              type="number"
              class="form-control mb-2"
              name="dribbling"
              value="<?php echo htmlspecialchars($player['players.dribbling']); ?>"
              placeholder="Dribbling"
              required
          />
          <input
              type="number"
              class="form-control mb-2"
              name="defending"
              value="<?php echo htmlspecialchars($player['players.defending']); ?>"
              placeholder="Defending"
              required
          />
          <input
              type="number"
              class="form-control mb-2"
              name="physical"
              value="<?php echo htmlspecialchars($player['players.physical']); ?>"
              placeholder="Physical"
              required
          />
          <input
              type="number"
              class="form-control mb-2"
              name="rating"
              value="<?php echo htmlspecialchars($player['players.rating']); ?>"
              placeholder="Rating"
              required
          />

          <button type="submit" name="submit" class="btn btn-success mb-2">Submit</button>
          <button
              type="button"
              class="btn btn-secondary mb-2"
              onclick="hideForm()"
          >
              Cancel
          </button>
      </form>
    </div>
    

</body>
</html>
