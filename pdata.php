<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="insertpdata.php" method="POST"> 
            <div class="form-group">
                <label>Pdata Form</label>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Amount Paid</label>
                <input type="text" class="form-control" id="amountpaid" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">start date</label>
                <input type="text" class="form-control" id="startdate" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">end date</label>
                <input type="text" class="form-control" id="enddate" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Company name</label>
                <input type="text" class="form-control" id="companyname" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone 1 *</label>
                <input type="text" class="form-control" id="phone1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone 2</label>
                <input type="text" class="form-control" id="phone2" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone 3</label>
                <input type="text" class="form-control" id="phone3" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="agent">Agent</label>
                <select class="form-control" id="status">
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
                <label for="installer">Installer</label>
                <select class="form-control" id="status">
                    <option>Activate</option>
                    <option>Deactivate</option>

                </select>

            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status">
                    <option>Activate</option>
                    <option>Deactivate</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>