<?php include 'db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password1= $_POST['password1'];
$password2= $_POST['password2'];
$sql="insert into studentsinfo (fname, lname, email, password1, password2)
values('$fname', '$lname', '$email', '$password1', '$password2')";
if($conn->query($sql) === TRUE) {
    header("Location: ThankYou.php");
}
else
{
    echo "ERROR" .$sql. "<br>" . $conn->error;
}
$conn->close();
?>