<?php

include("database/db_connection.php");

$name=$phone=$email=$id=$type="";

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$id=$_POST['id'];
$type=$_POST['type'];


 
$sql = "INSERT INTO agent (name, phone, email,id,type)
VALUES ('$name', '$phone', '$email','$id','$type')";

if (mysqli_query($dbcon, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($dbcon);

?>


