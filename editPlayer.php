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
   
   
//     echo ($rating);
   
    // $stmt = $connect->prepare($query);
    // $stmt->bind_param("issssiiiiiii", $playerID);
    // $stmt->execute();
    // $result = $stmt->get_result();

    // print_r($result->fetch_assoc());

    // if ($result->num_rows > 0)
    //  {
        
  


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
          <input class="form-control mb-2" type="hidden" name="playerID" value="<?php echo $player['playerID']; ?>">
<label class="form-control mb-2" for="">playerName</label>
          <input
              type="text"
              class="form-control mb-2"
              value="<?php echo ($player['nom']); ?>"
              name="playerName"
              placeholder="Player Name"
              required
          />
          <label class="form-control mb-2" for="">player photo</label>
          <input
              type="url"
              class="form-control mb-2"
              name="playerPhoto"
              value="<?php echo htmlspecialchars($player['photo']); ?>"
              placeholder="Player Photo URL"
          />

         
         
          <!-- <select name="position" > -->
              <!-- <option value="">position</option> -->
              <!-- <?php
                        // $query = "SELECT * FROM players";
                        // $result = mysqli_query($connect, $query);
                        // while($rowPosition = mysqli_fetch_assoc($result)){
                        //     echo '<option value="'.$rowPosition['position'].'">'.$rowPosition['position'].'</option>';
                            
                        // }
                        // ?> 
                    <!-- </select> -->
          
          <select name="nationalityName" >
              <option value="">choisir le nationality</option>
              <?php
                        $query = "SELECT * FROM nationality";
                        $result = mysqli_query($connect, $query);
                        while($rowNationality = mysqli_fetch_assoc($result)){
                            echo '<option value="'.$rowNationality['nationalityID'].'">'.$rowNationality['nationalityName'].'</option>';
                            
                        }
                        ?> 
                    </select>
                    <select name="clubName" >
                        <option value="">choisir le club</option>
                        <?php
                        $query = "SELECT * FROM club";
                        $result = mysqli_query($connect, $query);
                        while($rowNationality = mysqli_fetch_assoc($result)){
                            echo '<option value="'.$rowNationality['clubID'].'">'.$rowNationality['clubName'].'</option>';
                            
                        }
                        ?> 
                    </select>
        <label class="form-control mb-2" for="">pace</label>
        <input
              type="number"
              class="form-control mb-2"
              name="pace"
              value="<?php echo htmlspecialchars($player['pace']); ?>"
              placeholder="Pace"
              required
          />
          <label class="form-control mb-2" for="">shooting</label>
          <input
              type="number"
              class="form-control mb-2"
              name="shooting"
              value="<?php echo htmlspecialchars($player['shooting']); ?>"
              placeholder="Shooting"
              required
          />
          <label class="form-control mb-2" for="">passing</label>
          <input
              type="number"
              class="form-control mb-2"
              name="passing"
              value="<?php echo htmlspecialchars($player['passing']); ?>"
              placeholder="Passing"
              required
          />
          <label class="form-control mb-2" for="">dribbling</label>
          <input
              type="number"
              class="form-control mb-2"
              name="dribbling"
              value="<?php echo htmlspecialchars($player['dribbling']); ?>"
              placeholder="Dribbling"
              required
          />
          <label class="form-control mb-2" for="">defending</label>
          <input
              type="number"
              class="form-control mb-2"
              name="defending"
              value="<?php echo htmlspecialchars($player['defending']); ?>"
              placeholder="Defending"
              required
          />
          <label class="form-control mb-2" for="">physical</label>
          <input
              type="number"
              class="form-control mb-2"
              name="physical"
              value="<?php echo htmlspecialchars($player['physical']); ?>"
              placeholder="Physical"
              required
          />
          <label class="form-control mb-2" for="">rating</label>
          <input
              type="number"
              class="form-control mb-2"
              name="rating"
              value="<?php echo htmlspecialchars($player['rating']); ?>"
              placeholder="Rating"
              required
          />

          <button type="submit" name="submit" class="btn btn-success mb-2">edit</button>
          <button
              type="button"
              class="btn btn-secondary mb-2"
              onclick="hideForm()"
          >
              Cancel
          </button>
      </form>
    
    </div>
    <?php
     if(isset($_POST['submit'])){
    //       $query="update  players set nom=".$player['nom'].",photo=".$playerPhoto.",clubID=2,nationalityID=3,rating=".$rating.",shooting=".$shooting.",passing=".$passing.",pace=".$pace.",dribbling=".$dribbling.",defending=".$defending.",physical=".$physical.",position=".$position." where playerID=".$playerID."";
    //  $result= mysqli_query($connect,$query);
    $playerName=$_POST['playerName'];
    $playerPhoto=$_POST['playerPhoto'];
    $clubName=$_POST['clubName'];
    $nationalityName=$_POST['nationalityName'];
    // $position=$_POST['position'];
    $pace=$_POST['pace'];
    $shooting=$_POST['shooting'];
    $passing=$_POST['passing'];
    $dribbling=$_POST['dribbling'];
    $defending=$_POST['defending'];
    $physical=$_POST['physical'];
    $rating=$_POST['rating'];

   
    


    $query="update players set nom='$playerName',photo='$playerPhoto',rating='$rating',shooting='$shooting',passing='$passing',clubID='$clubName',nationalityID='$nationalityName',pace='$pace',dribbling='$dribbling',defending='$defending',physical='$physical' where playerID='$playerID' ";
     $result= mysqli_query($connect,$query);
     }
   
     
     ?>
    
    
   
   
</body>
</html>
