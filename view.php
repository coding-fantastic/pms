
<?php
 include "header.php";
?>

        <div class="table-scrol">
            <!--<a href="pdata.php"><button class="btn btn-primary">Companies</button></a>
            <a href="pagent.php"><button class="btn btn-primary">Agent</button></a>
            <a href="pinstaller.php"><button class="btn btn-primary">Installer</button></a>
            <a href="pdata.php"><button class="btn btn-primary">Home</button></a>-->

            
            <h1 align="center">List of Companies and their details</h1>

            <div class="table-responsive">
                <!--this is used for responsive display in mobile and other devices-->
                <table id="datatable" class="table table-bordered table-hover table-striped" style="table-layout: fixed">
                    <thead>

                        <tr>

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
            include("database/db_connection.php");  
            $view_users_query="select * from company";//select query for viewing users.  
            $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
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
                        <td><?php echo $company_name;  ?></td>
                       <td><?php echo  $amount_paid;  ?></td>
                <td><?php echo $start_date;  ?></td>
                <td><?php echo $end_date;  ?></td>
                
                <td><?php echo $phone1;  ?></td>
                <td><?php echo $phone2;  ?></td>
                <td><?php echo $phone3;  ?></td>
                <td><?php echo $agent;  ?></td>
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

                    <?php } ?>

                </table>
            </div>
            
        </div>


<?php
 include "footer.php";
?>