<?php 


include("database/db_connection.php");  


if (isset($_GET['id'])){
    
    $id = $_GET['id'];
    /*echo "id is <br>".$id;*/
     
    
    $sql = "update company 
    set statuss = 'Deactive'
    where company_id='$id'";
    
    if (mysqli_query($dbcon, $sql)) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . mysqli_error($dbcon);
}
    
    ?><script>
window.location="view.php";
</script><?php
}
?>

