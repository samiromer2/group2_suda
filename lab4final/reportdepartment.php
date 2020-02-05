<?php 

$servername = "localhost";
$username   = "root"; 
$password   = "oracle";
$dbname     = "group2_suda";

$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['delete']))
{
$theid = $_POST['theid'];
$sqldelete = "DELETE FROM `department` where `id` = '$theid'"; 
$conn->query($sqldelete);
}
if (isset($_POST['edit']))
{
echo "you are editing";
$theid   = $_POST['theid'];  
$newname = $_POST['updatename'];
$sqlupdate = "UPDATE `department` SET `name`='$newname' WHERE `id`='$theid'"; 
$conn->query($sqlupdate);
//
}

?>
<table>
<tr>
<td>
<a href="departmentform.php"> dept </a>
<a href="accountform.php"> account </a>
<a href="#"> appement </a>
<a href="#"> car </a>
<a href="#"> doc </a>
<a href="#"> emp </a>
<a href="#"> lab </a>
<a href="#"> pat </a>
<a href="#"> phr </a>
<a href="#"> room </a>
<a href="#"> sister </a>
</td>
</tr>
<tr>
<td>
<a href="reportdepartment.php">report dept </a>
<a href="#">report account </a>
<a href="#">report appement </a>
<a href="#">report car </a>
<a href="#">report doc </a>
<a href="#">report emp </a>
<a href="#">report lab </a>
<a href="#">report pat </a>
<a href="#">report phr </a>
<a href="#">report room </a>
<a href="#">report sister </a>
</td>
</tr>
</table>
<?php
$sql = "SELECT `id`, `name` FROM `department` "; 
$result = $conn->query($sql);

?>
<table border = '5'>
<tr>
<td>The id</td>
<td>DName</td>
</tr>
<?php
$count = 1;
while($row = $result->fetch_assoc()) 
{
?>
<form method = "POST" action = "reportdepartment.php" >
<input type = "hidden" name = "theid" value = "<?php echo $row['id'];?>">
<tr><td><?php echo $count;
$count = $count+1;
?></td>
<td><input name = "updatename" value = "<?php echo $row['name'];?>">
</td>
<td><input name = "delete" type = "submit" value = "delete"></td>
<td><input name = "edit" type = "submit" value = "edit"></td>
</tr>
</form>
<?php

}
echo "</table>"; 
?>