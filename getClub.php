<?php 
require 'header.html';
require 'database.php';


$query = "SELECT * FROM club";

$result = mysqli_query($connect,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap:wrap;
            gap:1rem;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
        }
        .player-card {
            background: #fff;
            width: 14rem;
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
            width: 3rem;
            height: 3rem;
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
    
<?php while($row = $result->fetch_assoc()) {?>
  

  
        <div class="player-header">
            <div class="stat">
                <span><?php echo htmlspecialchars($row['clubName']); ?></span>
            </div>
            <div class="stat">
                <img src="<?php echo htmlspecialchars($row['clubPhoto']); ?>" alt="" srcset="">
               
            </div>
            
        </div>

    
        <div class="player-footer">
            
        <?php echo" <a href=\"editClub.php?id=" . $row['clubID'] . "\"><i class=\"fa-regular fa-pen-to-square\"></i></a>";?>
        <?php echo" <a href=\"deleteClub.php?id=" . $row['clubID'] . "\"><i class=\"bi bi-trash-fill\"></i></a>";?>    
        
    </div>
<?php  }?>
</body>
</html>





