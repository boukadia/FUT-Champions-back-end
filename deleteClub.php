
<?php 
    require 'header.html';
    require 'database.php';
if (isset($_GET['id'])) {
    $clubID = intval($_GET['id']);

    // =======================delete===================================
    $query = "DELETE FROM club WHERE clubID = $clubID"; 
    $result=mysqli_query($connect,$query) ;   
    if (isset($query) ) {
        header("Location: admin.php?message=club deleted successfully");
        exit();
    } else {
        echo "Erreur : " . $result->error;
    }
    $query->close();
} else {
    echo "le club n'existe paas !";
}
// =====================================================================
// =======================delete2=====================================
// if (isset($_GET['id'])) {
// $clubID = intval($_GET['id']);
// $query = "DELETE FROM clubs WHERE clubID = ?";           
// $stmt = $connect->prepare($query);                           
// $stmt = $connect->prepare($query);                           
// $stmt->bind_param("i", $clubID);                           
//  ===================================================================


//     if ($stmt->execute()) {
//         header("Location: clubList.php?message=club deleted successfully");
//         exit();
//     } else {
//         echo "Erreur : " . $stmt->error;
//     }
//     $stmt->close();
// } else {
//     echo "le club n'exixste pas";
// }


?>