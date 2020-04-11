<?php
include_once 'DatabaseConnection.php';
$result = mysqli_query($conn,"SELECT * FROM studentdetails");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Welcome</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
  </tr>
<?php
$i=0;
echo "Welcome";
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
