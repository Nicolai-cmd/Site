<?php include 'header.php';?>
<hr>
<div class="container">
  <div class='row'>
    <div class='col-sm-12'><center><font color="#ffffff">
<?php
require 'db.php';
$sql = "select * from studentsinfo";
$result = $conn->query($sql);?>


<table border="1" cellpadding="5">
<tr>
<th>ID&emsp;</th><th>First Name&emsp;</th><th>Last Name&emsp;</th>
<th>Email&emsp;</th><th>Password1&emsp;</th> <th>Password2&emsp;</th><th>Edit&emsp;</th>
<th>Delete&emsp;</th>
</tr>
<?php
if($result ->num_rows > 0) {
while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?>&emsp;</td>
<td><?php echo $row["fname"]; ?>&emsp;</td>
<td><?php echo $row["lname"]; ?>&emsp;</td>
<td><?php echo $row["email"]; ?>&emsp;</td>
<td><?php echo $row["password1"]; ?>&emsp;</td>
<td><?php echo $row["password2"]; ?>&emsp;</td>
<td><a href="update.php?id=<?php echo $row['id']; ?>">Update&emsp;</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete&emsp;</a></td>
</tr>

<?php
}
}
else
{
echo "no results";
}
$conn->close();
?>
</table>
</font>
</center>
</div>
</div></div>
<?php include 'footer.php';?>
