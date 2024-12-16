
  
<?php 
include 'header.html';
include 'database.php';


$query = "SELECT players.nom, club.clubName, nationality.nationalityName, players.position, players.rating, players.pace, players.shooting, players.passing, players.dribbling, players.defending, players.physical
        FROM players
        JOIN club ON players.clubID = club.clubID
        JOIN nationality  ON players.nationalityID = nationality.nationalityID";

$result = mysqli_query($connect,$query)
?>


<div class="container">
    <h2 class="text-center mb-4">Player List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Player Name</th>
                <th>Team</th>
                <th>Nationality</th>
                <th>Position</th>
                <th>Rating</th>
                <th>Pace</th>
                <th>Shooting</th>
                <th>Passing</th>
                <th>Dribbling</th>
                <th>Defending</th>
                <th>Physical</th>
                <th>modifier</th>
                <th>supprimer   </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                             <td>" . htmlspecialchars($row['nom']) . "</td>
                    <td>" . htmlspecialchars($row['clubName']) . "</td>
                    <td>" . htmlspecialchars($row['nationalityName']) . "</td>
                    <td>" . htmlspecialchars($row['position']) . "</td>
                    <td>" . htmlspecialchars($row['rating']) . "</td>
                    <td>" . htmlspecialchars($row['pace']) . "</td>
                    <td>" . htmlspecialchars($row['shooting']) . "</td>
                    <td>" . htmlspecialchars($row['passing']) . "</td>
                    <td>" . htmlspecialchars($row['dribbling']) . "</td>
                    <td>" . htmlspecialchars($row['defending']) . "</td>
                    <td>" . htmlspecialchars($row['physical']) . "</td>
                            <td>
                        <button class='btn-modifier' data-id=''>Modifier</button>
                    </td>
                    <td>
                        <button class='btn-supprimer' data-id=''>Supprimer</button>
                    </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='11'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>


