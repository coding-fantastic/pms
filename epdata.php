<!--this file is used for editing companies-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>


    <!--start of datepicker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#datepicker").datepicker();
        });

    </script>
    <!--    end of datepicker-->


    <?php
    
    include("database/db_connection.php");  
    //declare and set variable to empty
    $amountpaid = $startdate = $enddate= $companyname= $phone1 =$phone2= $phone3 = $agent =$installer= $status="";
    
    
    //check if id is set and assign to id variable
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        echo json_encode($id);
        
    
    //query to select all the column in company table
    $sql="select * from company
    where company_id = '$id'
    "; 
    
        
    //here run the sql query. 
    $result=mysqli_query($dbcon,$sql) ;
        echo json_encode($result);
if (mysqli_num_rows($result) > 0) {
   // $i=0;
    
while($row = mysqli_fetch_array($result)) {
    $amountpaid = $row['amount_paid'];
    $startdate = $row['start_date'];
    $enddate = $row['end_date'];
    $companyname = $row['company_name'];
    $phone1 = $row['phone1'];
    $phone2 = $row['phone2'];
    $phone3 = $row['phone3'];
    $agent = $row['agent'];
    $installer = $row['installer'];
    $status = $row['statuss'];
    
}
}
        
    }
    ?>

    <title>Document</title>

</head>

<body>
    <div class="container">
        <a href="view.php"><button class="btn btn-primary">List</button></a>
        <form action="insertpdata.php" method="POST">
            <div class="form-group">
                <label>Company Form</label>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Amount Paid</label>
                <input type="text" class="form-control" value="<?php echo $amountpaid; ?>" name="amountpaid" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">start date</label>
                <input type="text" class="form-control" value="<?php echo $startdate; ?>" id="datepicker" name="startdate" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label>end date</label>
                <input type="text" class="form-control" id="datepicker" name="enddate" value="<?php echo $enddate; ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Company name</label>
                <input type="text" class="form-control" name="companyname" aria-describedby="emailHelp" value="<?php echo $companyname; ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone 1 *</label>
                <input type="text" class="form-control" name="phone1" aria-describedby="emailHelp" value="<?php echo $phone1; ?>" required>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone 2</label>
                <input type="text" class="form-control" name="phone2" aria-describedby="emailHelp" value="<?php echo $phone2; ?>">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone 3</label>
                <input type="text" class="form-control" name="phone3" value="<?php echo $phone3; ?>">

            </div>
            <div class="form-group">
                <label for="agent">Agent</label>
                <select class="form-control" name="agent" >
                    <?php
    include("database/db_connection.php");  
    $view_users_query="select * from agent";//select query for viewing users.  
    $result=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
if (mysqli_num_rows($result) > 0) {
   // $i=0;
while($row = mysqli_fetch_array($result)) {
?>
                    <option value="<?php echo $row['agent_id'] ; ?>"><?php echo $row['name'] ; ?></option>

                    <?php
                      }
                } ?>


                </select>

            </div>
            <div class="form-group">
                <label for="agent">Installer</label>
                <select class="form-control" name="installer">
                    <?php
    include("database/db_connection.php");  
    $view_users_query="select * from installer";//select query for viewing users.  
    $result=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
if (mysqli_num_rows($result) > 0) {
   // $i=0;
while($row = mysqli_fetch_array($result)) {
?>
                    <option value="<?php echo $row['installer_id'] ; ?>"><?php echo $row['name'] ; ?></option>

                    <?php
                      }
                } ?>


                </select>

            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status">

                    <option value="Active">Activate</option>
                    <option value="Deactive">Deactivate</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>
