<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FUT Champions Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
      <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
    </svg> -->
  <link
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body{
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        display: flex;
        justify-content: space-between;

      }
      .pageContainer {
        position:relative;
        width:100vw;
        background-color: #f8f9fa;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
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
      .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
      }
      .container {
        width: 100%;
        max-width: 600px; /* Limit the width of the forms */
        margin: 0 auto;
      }

      /* Sidebar styles */
      .sidebar {
        z-index: 1;
        background-color: #007bff;
        width: 200px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 20px;
        color: white;
      }
      .sidebar a {
        display: block;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-size: 18px;
      }
      .sidebar a:hover {
        background-color: #0056b3;
      }

      .main-content {
        margin-left: 260px; /* Add space for the sidebar */
        padding: 20px;
        width: 100%;
      }
      /* Style the form itself */
      form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

    </style>
  </head>



  <body>

  
    <div class="sidebar">
    <div class="sidebar">
      <h2 class="text-center">Dashboard</h2>
      <a href="show.php" > Players</a>
      <a href="getNationality.php" >Nationality</a>
      <a href="getClub.php" > Club</a>
    </div>
    </div>
 <div class="pageContainer">
 <div class="header">
      <h1>FUT Champions</h1>
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
      
        <button class="btn btn-primary">
        <a style="color:white;text-decoration: none" href="getPlayers.php">modifier</a>
        </button>
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
        <option class="cb1" value="lcb">LCB</option>
        <option class="cb2" value="rcb">RCB</option>
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



<!-- =====================nationality form============================= -->


    <div id="nationalityForm" class="form-container" style="display: none">
      <div class="container">
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
            placeholder="Nationality URL"
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
    </div>

<!-- =====================club form============================= -->


    <div id="clubForm" class="form-container" style="display: none">
      <div class="container">
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
            placeholder="Club URL"
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
    </div>
    

 </div>
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
