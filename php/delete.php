<?php
include "db.php"; //ket noi CSDL


$id = intval($_GET["id"]); 
$sql="DELETE FROM table_student WHERE id=$id";  

if($conn->query($sql) === TRUE){

    header("Location: index.php");
}
else{
    echo "Phat hien loi!!!: " . $conn->error;
}
?>