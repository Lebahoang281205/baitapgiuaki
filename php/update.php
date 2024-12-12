
<?php
include "db.php"; //ket noi CSDL

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = intval($_POST["id"]);
    $full_name = $_POST["full_name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $hometown = $_POST["hometown"];
    $level_id = intval($_POST["level_id"]);
    $group_id = intval($_POST["group_id"]);

    $sql = "INSERT INTO table_student (id, full_name, dob, gender, hometown, level_id, group_id) 
    VALUES ($id, '$full_name','$dob','$gender','$hometown',$level_id,$group_id)";

    if($conn->query($sql) === TRUE){

        header("Location: index.php");
        exit();
    }
    else{
        echo "Loi:" . $sql . $conn->error;
    }

}
?>