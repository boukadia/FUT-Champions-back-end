<?php
require 'header.html';
require 'database.php';

// if (isset($_GET['id'])) 

    $clubID = intval($_GET['id']);
    
    
    $query="SELECT * 
    FROM club where clubID = $clubID";
    // $result=mysqli_query($connect,$query);
    $result = mysqli_query($connect,$query);
    $club = $result->fetch_assoc();
   
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
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
   <body>
    
   <div id="clubForm" class="form-container" style="display: block">
      <div class="container">
        <h3>Add club</h3>
        <form action="" method="POST">
            
          <input
            class="form-control mb-2" type="hidden" name="clubID" value="<?php echo $club['clubID']; ?>"
          />
          <input
            type="text"
            class="form-control mb-2"
            name="clubName"
            value="<?php echo ($club['clubName']); ?>"
            placeholder="club Name"
          />

          <input

            type="url"
            class="form-control mb-2"
            name="clubPhoto"
            value="<?php echo ($club['clubPhoto']); ?>"
            placeholder="club URL"
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
    </div>
    <?php
     if(isset($_POST['submit'])){
    //       $query="update  players set nom=".$player['nom'].",photo=".$playerPhoto.",clubID=2,clubID=3,rating=".$rating.",shooting=".$shooting.",passing=".$passing.",pace=".$pace.",dribbling=".$dribbling.",defending=".$defending.",physical=".$physical.",position=".$position." where playerID=".$playerID."";
    //  $result= mysqli_query($connect,$query);
    $clubName=$_POST['clubName'];
    $clubPhoto=$_POST['clubPhoto'];

   
    


    $query="update club set clubName='$clubName',clubPhoto='$clubPhoto' where clubID='$clubID' ";
     $result= mysqli_query($connect,$query);
     }
   
     
     ?>
    
    

   </body>
   </html>
    