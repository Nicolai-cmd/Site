<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="fname" value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" value="<?php echo $row['lname']; ?>">
<br>
Email :<br>
<input type= "email" name="email" value="<?php echo $row['email']; ?>">
<br>
Password :<br>
<input type="text" name="password1" value="<?php echo $row['password1']; ?>">
<br>
Reapet password :<br>
<input type="text" name="password2" value="<?php echo $row['password2']; ?>">
<br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php
if($_POST['submit']){

$fname = $_POST['fname'];
$query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
if($query){
echo "Record Deleted with id: $a <br>";
echo "<a href='update.php'> Check your updated List </a>";
// if you want to redirect to update page after updating
//header("location: update.php");
}
else { echo "Record Not Deleted";}
}
$conn->close();
?>
</body>
</html>