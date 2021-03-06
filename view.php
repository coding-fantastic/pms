<?php
 include "header.php";

?>


<?php  
          include("database/db_connection.php");  
?>




<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">List</a></li>


                    <li class="breadcrumb-item active">Company</li>
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

                <div class="table-scrol">
                    <!--<a href="pdata.php"><button class="btn btn-primary">Companies</button></a>
            <a href="pagent.php"><button class="btn btn-primary">Agent</button></a>
            <a href="pinstaller.php"><button class="btn btn-primary">Installer</button></a>
            <a href="pdata.php"><button class="btn btn-primary">Home</button></a>-->


                    <h1 align="center">List of Companies and their details</h1>

                    <div class="table-responsive">
                        <!--this is used for responsive display in mobile and other devices-->
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>

                                <tr>
                                    <th>#</th>
                                    <th>Company name</th>
                                    <th>Amount Paid</th>
                                    <th>Start date</th>
                                    <th>End date</th>

                                    <th>Phone 1</th>
                                    <th>Phone 2</th>
                                    <th>Phone 3</th>
                                    <th>Agent</th>
                                    <th>Installer</th>
                                    <th>Status</th>

                                    <th>Action</th>

                                </tr>
                            </thead>

                            <?php  
            
            $sql="select * from company order by company_id desc";//select query for viewing users.  
            $result=mysqli_query($dbcon,$sql);//here run the sql query.  
            if(mysqli_num_rows($result) > 0){
                $i=1;
            while($row=mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.  
            {  
                $id =  $row['company_id'];
                $amount_paid=$row['amount_paid'];
                $start_date=$row['start_date'];
                $end_date=$row['end_date'];
                $company_name=$row['company_name'];
                $phone1=$row['phone1'];  
                $phone2=$row['phone2'];  
                $phone3=$row['phone3'];  
                $agent=$row['agent'];
                $installer= $row['installer'];
                $status = $row['statuss'];
      
            ?>

                            <tr>
                                
                                <!--here showing results in the table -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $company_name;  ?></td>
                                <td><?php echo  $amount_paid;  ?></td>
                                <td><?php echo $start_date;  ?></td>
                                <td><?php echo $end_date;  ?></td>

                                <td><?php echo $phone1;  ?></td>
                                <td><?php echo $phone2;  ?></td>
                                <td><?php echo $phone3;  ?></td>
                                <td><?php echo $agent; 
                    /*                $sql = "select name from agent2 where agent_id ='$agent'";
                    $result = mysqli_query($dbcon, $sql);
                
                while($row=mysqli_fetch_array($result)){
                    
                    $agentname = $row['name'];
                    
                }*/
                
                                    
                                    ?></td>
                                <td><?php echo $installer;  ?></td>
                                <td><?php echo $status;  ?></td>


                                <!--<td>
                            <a href=""><button class="btn btn-danger">Delete</button></a>
                            <a href=""><button class="btn btn-primary">edit</button></a>
                            <a href=""><button class="btn btn-primary">Deactivate</button></a>
                        </td>-->
                                <!--btn btn-danger is a bootstrap button to show danger-->
                                <td>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <i data-feather="chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="epdata.php?id=<?php echo $id; ?>">Edit</a>
                                            <a class="dropdown-item" href="deletecompany.php?id=<?php echo $id; ?>">Delete</a>
                                            <a class="dropdown-item" href="suspendcompany.php?id=<?php echo $id; ?>">Suspend</a>
                                        </div>
                                    </div>


                                </td>
                            </tr>

                            <?php
                $i++;
            } 
                
            }?>

                        </table>
                    </div>

                </div>




            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



<?php
 include "footer.php";
?>
