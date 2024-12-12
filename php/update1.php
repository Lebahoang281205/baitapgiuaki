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

    $sql = "UPDATE table_student SET id = '$id', full_name = '$full_name', dob = '$dob', gender = '$gender', hometown = '$hometown', level_id = '$level_id', group_id = '$group_id' WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");
}
?>
