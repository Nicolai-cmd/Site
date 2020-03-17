
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
<input type="email" name="email" value="<?php echo $row['email']; ?>">
<br>
Password :<br>
<input type="text" name="password1" value="<?php echo $row['password1']; ?>">
<br>
Repeat password :<br>
<input type="text" name="password2" value="<?php echo $row['password2']; ?>">
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php
if($_POST['submit']){

$fname = $_POST['fname'];
$query = mysqli_query($conn,"UPDATE studentsinfo set fname='$fname' where id='$a'");

$lname = $_POST['lname'];
$query = mysqli_query($conn,"UPDATE studentsinfo set lname='$lname' where id='$a'");
$email = $_POST['email'];
$query = mysqli_query($conn,"UPDATE studentsinfo set email='$email' where id='$a'");
$password1 = $_POST['password1'];
$query = mysqli_query($conn,"UPDATE studentsinfo set password1='$password1' where id='$a'");
$password2 = $_POST['password2'];
$query = mysqli_query($conn,"UPDATE studentsinfo set password2='$password2' where id='$a'");
if($query){
echo "Record Modified Successfully <br>";
echo "<a href='update.php'> Check your updated List </a>";
// if you want to redirect to update page after updating
//header("location: update.php");
}
else { echo "Record Not modified";}
}
$conn->close();
?>
</body>
</html>
