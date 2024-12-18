
<?php 
    require 'header.html';
    require 'database.php';
    



if (isset($_GET['id'])) {
    $playerID = intval($_GET['id']);

    // =======================delete===================================
    $query = "DELETE FROM players WHERE playerID = $playerID"; 
    $result=mysqli_query($connect,$query) ;   
    if (isset($query) ) {
        header("Location: admin.php?message=Player deleted successfully");
        exit();
    } else {
        echo "Erreur : " . $result->error;
    }
    $query->close();
} else {
    echo "le player n'existe paas !";
}
// =====================================================================
// =======================delete2=====================================
// if (isset($_GET['id'])) {
// $playerID = intval($_GET['id']);
// $query = "DELETE FROM players WHERE playerID = ?";           
// $stmt = $connect->prepare($query);                           
// $stmt = $connect->prepare($query);                           
// $stmt->bind_param("i", $playerID);                           
//  ===================================================================


//     if ($stmt->execute()) {
//         header("Location: playerList.php?message=Player deleted successfully");
//         exit();
//     } else {
//         echo "Erreur : " . $stmt->error;
//     }
//     $stmt->close();
// } else {
//     echo "le player n'exixste pas";
// }


?>