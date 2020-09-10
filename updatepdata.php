<?php 

session_start();

include("database/db_connection.php");  


$id = $_SESSION['editid'];



?>

<?php 



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


    $sql = "update company 
    set amount_paid = '$amountpaid' , start_date = '$startdate' , end_date = '$enddate', company_name = '$companyname', phone1 = '$phone1', phone2 = '$phone2', phone3 = '$phone3', agent = '$agent', installer = '$installer', statuss='$status'
     where company_id = '$id'";

    if (mysqli_query($dbcon, $sql)) {
      echo "New record updated successfully";
        ?>
    <script>
        window.location="view.php";
    </script>
    <?php
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);
        }

        mysqli_close($dbcon);

 $_SESSION['editid'] = null;

?>