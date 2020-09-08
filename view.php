<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <!--css file link in bootstrap folder-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>View Users</title>
</head>
<!--
<style>
    .login-panel {
        margin-top: 150px;
    }

    .table {
        margin-top: 50px;
    }

</style>
-->


<body>
    <div class="container">

        <div class="table-scrol">
            <a href="pdata.php"><button class="btn btn-primary">Companies</button></a>
            <a href="pagent.php"><button class="btn btn-primary">Agent</button></a>
            <a href="pinstaller.php"><button class="btn btn-primary">Installer</button></a>
            <a href="pdata.php"><button class="btn btn-primary">Home</button></a>

            
            <h1 align="center">List of Companies and their details</h1>

            <div class="table-responsive">
                <!--this is used for responsive display in mobile and other devices-->
                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
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
                <td><?php echo $start_date=$row;  ?></td>
                <td><?php echo $end_date=$row;  ?></td>
                
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
    <a class="dropdown-item" href="#">Edit</a>
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

    </div>
    
    

</body>

</html>
