<?php
include "../db.php";

$id = $_GET['id'];
$sql = "DELETE FROM `characteristic` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: ../db_editor.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}
?>