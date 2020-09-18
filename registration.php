
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
                <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>Registration</title>  
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;  
        }
    </style>  
    <body>  
      
    <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
        <div class="row"><!-- row class is used for grid system in Bootstrap-->  
            <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Registration</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="registration.php">  
                            <fieldset>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                                </div>  
      
                                <div class="form-group">  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                </div>  
      
      
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
      
                            </fieldset>  
                        </form>  
                        <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
      
    </body>  
      
    </html>  
      
    <?php  
      
    include("database/db_connection.php");//make connection here  
    if(isset($_POST['register']))  
    {  
        $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
        $user_pass=$_POST['pass'];//same  
        $user_email=$_POST['email'];//same  
      
      
        if($user_name=='')  
        {  
            //javascript use for input checking  
            echo"<script>alert('Please enter the name')</script>";  
    exit();//this use if first is not work then other will not show  
        }  
      
        if($user_pass=='')  
        {  
            echo"<script>alert('Please enter the password')</script>";  
    exit();  
        }  
      
        if($user_email=='')  
        {  
            echo"<script>alert('Please enter the email')</script>";  
        exit();  
        }  
    //here query check weather if user already registered so can't register again.  
        $check_email_query="select * from users WHERE user_email='$user_email'";  
        $run_query=mysqli_query($dbcon,$check_email_query);  
      
        if(mysqli_num_rows($run_query)>0)  
        {  
    echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
    exit();  
        }  
    //insert the user into the database.  
        $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
        if(mysqli_query($dbcon,$insert_user))  
        {  
            echo"<script>window.open('welcome.php','_self')</script>";  
        }  
    } 
    ?>  
