
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
                <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>View Users</title>  
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;  
        }  
        .table {  
            margin-top: 50px;  
         }  
    </style>  
      
    <body>  
      
    <div class="table-scrol">  
        <h1 align="center">All the Users</h1>  
      
    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
            <thead>  
      
            <tr>  
      
                <th>User Id</th>  
                <th>User Name</th>  
                <th>User E-mail</th>  
                <th>User Pass</th>  
                <th>Delete User</th>  
            </tr>  
            </thead>  
      
            <?php  
            include("database/db_connection.php");  
            $view_users_query="select * from users";//select query for viewing users.  
            $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
      
            while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $user_id=$row[0];  
                $user_name=$row[1];  
                $user_email=$row[2];  
                $user_pass=$row[3];  
      
            ?>  
      
            <tr>  
             <!--here showing results in the table -->  
                <td><?php echo $user_id;  ?></td>  
                <td><?php echo $user_name;  ?></td>  
                <td><?php echo $user_email;  ?></td>  
                <td><?php echo $user_pass;  ?></td>  
                <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
            </tr>  
      
            <?php } ?>  
      
        </table>  
            </div>  
    </div>  
    </body>  
      
    </html>  
