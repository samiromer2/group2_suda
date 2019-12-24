<?php
print_r($_POST);
$id      = $_POST['id'];
$name    = $_POST['ptname'];
$age     = $_POST['age'];
$day     = $_POST['day'];
$month   = $_POST['mon'];
$year    = $_POST['year'];
$tel     = $_POST['phone'];
$address = $_POST['address'];

echo $fulldate = $day."-".$month."-".$year;
echo "<br>";

?>
<table border = "2">
<tr>
<td>id</td>
<td>name</td>
<td>age</td>
<td>date of meeting</td>
<td>phone</td>
<td>address</td>
</tr>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $_POST['ptname'];?></td>
<td><?php echo $age ;?></td>
<td><?php echo $fulldate?></td>
<td><?php echo $tel;?></td>
<td><?php echo $address;?></td>
</tr>
</table>
