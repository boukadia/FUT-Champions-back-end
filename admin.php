<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FUT Champions Dashboard</title>
   
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
      .header {
        background-color: #007bff;
        color: white;
        padding: 20px;
        text-align: center;
      }
      .stats {
        display: flex;
        justify-content: space-around;
        margin: 20px 0;
      }
      .stat-card {
        background: white;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        width: 25%;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .stat-card h2 {
        font-size: 2em;
      }
      .footer {
        background-color: #007bff;
        color: white;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
 
  <i  class="bi bi-pencil-square text-danger"></i>

   
    <div class="header">
      <h1>FUT Champions Dashboard</h1>
    </div>

   
    <div class="stats">
      <div class="stat-card">
        <h2>50</h2>
        <p>Total Players</p>
      </div>
      <div class="stat-card">
        <h2>12</h2>
        <p>Total Teams</p>
      </div>
      <div class="stat-card">
        <h2>20</h2>
        <p>Total Nationalities</p>
      </div>
    </div>

   
    <div class="container">
      <div class="button-group mb-3 text-right">
        <button class="btn btn-primary" onclick="showForm('playerForm')">
          Add Player
        </button>
        <button class="btn btn-primary" onclick="showForm('nationalityForm')">
          Add Nationality
        </button>
        <button class="btn btn-primary" onclick="showForm('clubForm')">
          Add Club
        </button>
       
      </div>
    </div>

   
    <div id="playerForm" class="container" style="display: none">
      <h3 id="form-title">Add Player</h3>
      <form action="addPlayer.php" method="POST">
    <input
        type="text"
        class="form-control mb-2"
        name="playerName"
        placeholder="Player Name"
    />
    <input
        type="url"
        class="form-control mb-2"
        name="playerPhoto"
        placeholder="Player photo"
    />
    <select class="form-control mb-2" name="position">
        <option value="" disabled selected>Choose Position</option>
        <option class="gk" value="gk">GK</option>
        <option class="cb1" value="cb">CB</option>
        <option class="cb2" value="cb">CB</option>
        <option class="lb" value="lb">LB</option>
        <option class="rb" value="rb">RB</option>
        <option class="cdm" value="cdm">CDM</option>
        <option class="cm" value="cm">CM</option>
        <option class="cam" value="cam">CAM</option>
        <option class="lw" value="lw">LW</option>
        <option class="rw" value="rw">RW</option>
        <option class="st" value="st">ST</option>
    </select>

   

    
                    
   
  
<?php include "database.php" ?>
    <!-- ======================================================== -->
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

    

    <input
        type="number"
        class="form-control mb-2"
        name="pace"
        placeholder="Pace"
    />
    <input
        type="number"
        class="form-control mb-2"
        name="shooting"
        placeholder="Shooting"
    />
    <input
        type="number"
        class="form-control mb-2"
        name="passing"
        placeholder="Passing"
    />
    <input
        type="number"
        class="form-control mb-2"
        name="dribbling"
        placeholder="Dribbling"
    />
    <input
        type="number"
        class="form-control mb-2"
        name="defending"
        placeholder="Defending"
    />
    <input
        type="number"
        class="form-control mb-2"
        name="physical"
        placeholder="Physical"
    />
    <input
        type="number"
        class="form-control mb-2"
        name="rating"
        placeholder="Rating"
    />
    <button type="submit" name="submit" id='submet' class="btn btn-success mb-2 ">Submit</button>
    <button
        type="button"
        class="btn btn-secondary mb-2"
        onclick="hideForm()"
    >
        Cancel
    </button>
</form>
    </div>
    <div class="footer"> 
    </div>

  <?php include 'getPlayers.php'; ?>
 <!-- Nationality Form -->
 <div id="nationalityForm" class="container" style="display: none">
      <h3>Add Nationality</h3>
      <form action="addNationality.php" method="POST">
        <input
          type="text"
          class="form-control mb-2"
          name="nationalityName"
          placeholder="Nationality Name"
        />
        <input
          type="url"
          class="form-control mb-2"
          name="nationalityPhoto"
          placeholder="Nationality url"
        />
        <button type="submit" class="btn btn-success mb-2">Submit</button>
        <button
          type="button"
          class="btn btn-secondary mb-2"
          onclick="hideForm()"
        >
          Cancel
        </button>
      </form>
    </div>

   
  


<div id="clubForm" class="container" style="display: none">
  <h3>Add Club</h3>
  <form action="addClub.php" method="POST">
 
    <input
      type="text"
      class="form-control mb-2"
      name="clubName"
      placeholder="Club Name"
    />
    
    
    <input
      type="url"
      class="form-control mb-2"
      name="clubPhoto"
      placeholder="Club url"
    />
    
    <button type="submit" class="btn btn-success mb-2">Submit</button>
    <button
      type="button"
      class="btn btn-secondary mb-2"
      onclick="hideForm()"
    >
      Cancel
    </button>
  </form>
</div>




    <div class="footer"></div>

    


    <script>
   
      function showForm(formId) {
        
        document.getElementById("playerForm").style.display = "none";
        document.getElementById("nationalityForm").style.display = "none";
        document.getElementById("clubForm").style.display = "none";

     
        document.getElementById(formId).style.display = "block";
      }

      function hideForm() {
        document.getElementById("playerForm").style.display = "none";
        document.getElementById("nationalityForm").style.display = "none";
        document.getElementById("clubForm").style.display = "none";
      }
   
    </script>
  </body>
</html>
