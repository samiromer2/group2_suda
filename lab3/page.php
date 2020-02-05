this is to test
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


$sql = "SELECT `id`, `name` FROM `department` "; 
$result = $conn->query($sql);

if ($result->num_rows > 0) { // output data of each row 
?>
<table border = '5'>
<?php
while($row = $result->fetch_assoc()) 
{
?>

<tr><td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td></tr>

<?php

}
echo "</table>"; 
} 
else 
{ 
echo"0 results"; 
} 
$conn->close();


?>
