<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <!--css file link in bootstrap folder-->
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
    <?php
    include("database/db_connection.php");  
    $view_users_query="select * from users";//select query for viewing users.  
    $result=mysqli_query($dbcon,$view_users_query);//here run the sql query. 
if (mysqli_num_rows($result) > 0) {
?>
    <table>

        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Identification number</td>
            <td>Type</td>
        </tr>
        <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
        <tr>
        <td><?php echo $i; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["type"]; ?></td>
        </tr>
        <?php
$i++;
}
?>
    </table>
    <?php
}
else{
    echo "No result found";
}
?>
</body>

</html>