<?php
//CSDL
$host = "localhost";
$username = "root";
$password = "";
$databasename = "qlsv_lebahoang";

$conn= new mysqli($host, $username, $password, $databasename);
if(!$conn){
    die("Ket noi that bai!");
}
?>