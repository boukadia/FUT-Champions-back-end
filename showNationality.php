<?php 
require 'header.html';
require 'database.php';

$query = "SELECT * FROM nationality";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nationalities</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            height: 100vh;
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
        }
        .nationality-card {
            text-align: center;
            background: #fff;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 20px;
        }
        .nationality-header {
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: white;
            text-align: center;
            padding: 20px;
        }
        .nationality-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            border: 3px solid white;
        }
        .nationality-header h3 {
            margin: 0;
        }
        .nationality-header p {
            margin: 5px 0;
            font-size: 14px;
        }
        .nationality-body {
            padding: 20px;
        }
        .nationality-body .stat {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }
        .nationality-body .stat img {
            width: 80px;
        }
        .nationality-footer {
            text-align: center;
            background: #f8f9fa;
            padding: 15px;
            font-size: 14px;
        }
        .nationality-footer button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .nationality-footer button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php while ($row = $result->fetch_assoc()) { ?>
    <div class="nationality-card">
        <div class="nationality-header">
            <img src="<?php echo htmlspecialchars($row['nationalityPhoto']); ?>" alt="Nationality Photo">
            <h3><?php echo htmlspecialchars($row['nationalityName']); ?></h3>
        </div>

        <div class="nationality-footer">
        <?php echo" <a href=\"editNationality.php?id=" . $row['nationalityID'] . "\"><i class=\"fa-regular fa-pen-to-square\"></i></a>";?>
        </div>
        <div class="nationality-footer">
        <?php echo" <a href=\"deleteNationality.php?id=" . $row['nationalityID'] . "\"><i class=\"bi bi-trash-fill\"></i></a>";?>
        </div>
    </div>
<?php } ?>
</body>
</html>
