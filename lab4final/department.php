<?php 

$servername = "localhost";
$username   = "root"; 
$password   = "oracle";
$dbname     = "group2_suda";

$conn = new mysqli($servername, $username, $password, $dbname);


$id      = $_POST['id'];
$name    = $_POST['ptname'];


$sql = "INSERT INTO `department`(`id`, `name`) VALUES ($id,'$name')";
$conn->query($sql); 

header("location:departmentform.php");

?>
