
<?php 
    require 'header.html';
    require 'database.php';
if (isset($_GET['id'])) {
    $nationalityID = intval($_GET['id']);

    // =======================delete===================================
    $query = "DELETE FROM nationality WHERE nationalityID = $nationalityID"; 
    $result=mysqli_query($connect,$query) ;   
    if (isset($query) ) {
        header("Location: admin.php?message=nationality deleted successfully");
        exit();
    } else {
        echo "Erreur : " . $result->error;
    }
    $query->close();
} else {
    echo "le nationality n'existe paas !";
}
// =====================================================================
// =======================delete2=====================================
// if (isset($_GET['id'])) {
// $nationalityID = intval($_GET['id']);
// $query = "DELETE FROM nationalitys WHERE nationalityID = ?";           
// $stmt = $connect->prepare($query);                           
// $stmt = $connect->prepare($query);                           
// $stmt->bind_param("i", $nationalityID);                           
//  ===================================================================


//     if ($stmt->execute()) {
//         header("Location: nationalityList.php?message=nationality deleted successfully");
//         exit();
//     } else {
//         echo "Erreur : " . $stmt->error;
//     }
//     $stmt->close();
// } else {
//     echo "le nationality n'exixste pas";
// }


?>