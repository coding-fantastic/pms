<?php

    include("database/db_connection.php");
    
    $amountpaid = $startdate = $enddate= $companyname= $phone1 =$phone2= $phone3 = $agent =$installer= $status="";
    
     $sql="select * from company";
    $result=mysqli_query($dbcon,$sql);//here run the sql query. 
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
    ?>

<!--<title>Document</title>
    
</head>

<body>
    <div class="container">-->

<?php
 include "header.php";
?>

<!--<a href="view.php"><button class="btn btn-primary">List</button></a>-->





<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Components</a></li>

                    <li class="breadcrumb-item active">Form Elements</li>
                </ol>
            </div>
            <h4 class="page-title">Company</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Textual inputs</h4>

                <form action="insertpdata.php" method="POST">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Amount Paid</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Amount Paid" id="example-text-input" name="amountpaid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="" placeholder="date" id="example-date-input" name="startdate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="" placeholder="date" id="example-date-input" name="enddate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Company Name" id="example-text-input" name="companyname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 1</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Phone number"  id="example-text-input" name="phone1" maxlength="10" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 2</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" placeholder="Phone number 2" id="example-text-input" name="phone2" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone 3</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=""  placeholder="Phone number 3" id="example-text-input" name="phone3" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agent</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="agent">
                                <!--<option selected>Open this select menu</option>-->
                                <?php
                                $sql = "select * from agent2";
                                $result = mysqli_query($dbcon, $sql);
                                if(mysqli_num_rows($result) > 0){
                                while($row= mysqli_fetch_array($result)){
                                    ?>
                                
                                <option value="<?php echo $row['name'] ; ?>"><?php echo $row['name'] ; ?></option>
                                    
                                    <?php
                                }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">installer</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="installer">
                                <!--<option selected>Open this select menu</option>-->
                                <?php
                                $sql = "select * from installer2";
                                $result = mysqli_query($dbcon, $sql);
                                if(mysqli_num_rows($result) > 0){
                                while($row= mysqli_fetch_array($result)){
                                    ?>
                                
                                <option value="<?php echo $row['name'] ; ?>"><?php echo $row['name'] ; ?></option>
                                    
                                    <?php
                                }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="status">
                                <!--<option selected>Open this select menu</option>-->
                                <option value="Active">Activate</option>
                                <option value="Deactive">Deactivate</option>
                                
                            </select>
                        </div>
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

<!--    </div>
    
    
</body>

</html>-->
