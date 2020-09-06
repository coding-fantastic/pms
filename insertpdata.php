<?php

$amountpaid="";
$startdate="";
$enddate="";
$companyname="";
$phone1="";
$phone2="";
$phone3="";
$agent="";
$installer="";
$status="";

$amountpaid=$_POST['amountpaid'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$companyname=$_POST['companyname'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$phone3=$_POST['phone3'];
$agent=$_POST['agent'];
$installer=$_POST['installer'];
$status=$_POST['status'];

echo $agent;
echo $companyname;

/*
$sql = "INSERT INTO pdata (amountpaid, startdate, enddate,companyname,phone1,phone2,phone3,agent,installer,statuss)
VALUES ('$amountpaid', '$startdate', '$enddate','$companyname','$phone1','$phone2','$phone3','$agent','$installer','$status')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);*/

?>


