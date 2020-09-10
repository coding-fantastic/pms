<?php
session_start();
?>

<?php

 include "header.php";
?>


    <?php
    
    include("database/db_connection.php");  
    //declare and set variable to empty
    $amountpaid = $startdate = $enddate= $companyname= $phone1 =$phone2= $phone3 = $agent =$installer= $status="";
    
    
    
    
    
    //check if id is set and assign to id variable
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $_SESSION['editid'] = $id;
        //echo json_encode($id);
        
    
    //query to select all the column in company table
    $sql="select * from company
    where company_id = '$id'
    "; 
    
        
    //here run the sql query. 
    $result=mysqli_query($dbcon,$sql) ;
        //echo json_encode($result);
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


<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">List</a></li>

                    <li class="breadcrumb-item active">Edit Company</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Company</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->



<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">


        <!--<a href="view.php"><button class="btn btn-primary">List</button></a>-->
        <form action="updatepdata.php" method="POST">
            <div class="form-group">
                <label>Company Form</label>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Amount Paid</label>
                <input type="text" class="form-control" value="<?php echo $amountpaid; ?>" name="amountpaid" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">start date</label>
                <input type="date" class="form-control" value="<?php echo $startdate; ?>" id="example-date-input" name="startdate" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label>end date</label>
                <input type="date" class="form-control" id="example-date-input" name="enddate" value="<?php echo $enddate; ?>">

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
    $view_users_query="select * from agent2";//select query for viewing users.  
    $result=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
if (mysqli_num_rows($result) > 0) {
    
   // $i=0;
    
    ?>
                    <option selected value="<?php echo $agent; ?> "><?php echo $agent; ?></option>
                    
                    <?php
while($row = mysqli_fetch_array($result)) {
?>
                    <option value="<?php echo $row['name'] ; ?>"><?php echo $row['name'] ; ?></option>

                    <?php
                      }
                } ?>


                </select>

            </div>
            <div class="form-group">
                <label for="installer">Installer</label>
                <select class="form-control" name="installer">
                    <?php
    
    $sql="select * from installer2";//select query for viewing users.  
    $result=mysqli_query($dbcon,$sql);//here run the sql query. 
if (mysqli_num_rows($result) > 0) {
    
   // $i=0;
    ?>
                    <option selected value="<?php echo $installer; ?> "><?php echo $installer; ?></option>
                    
                    <?php
while($row = mysqli_fetch_array($result)) {
?>
                    <option value="<?php echo $row['name'] ; ?>"><?php echo $row['name'] ; ?></option>

                    <?php
                      }
                } ?>


                </select>

            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status">
                    
                    
                    <option selected value="<?php echo $status; ?> "><?php echo $status; ?></option>
                    
                    

                    <option value="Active">Active</option>
                    <option value="Deactive">Deactivate</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                
                
 

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

                
                
                
    <?php
 include "footer.php";
?>