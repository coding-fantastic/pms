<?php
 include "header.php";
?>


<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                
                
                


        <form action="insertagent.php" method="POST"> 
            <div class="form-group">
                <label>Agent Form</label>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="phone" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" class="form-control" name="id" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <input type="text" class="form-control" name="type" aria-describedby="emailHelp">
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
