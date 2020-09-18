<?php 


include("database/db_connection.php");  


if (isset($_GET['id'])){
    
    $id = $_GET['id'];
    /*echo "id is <br>";
    echo $id;*/
    
    
    $sql = "
    delete from company 
    where
    company_id ='$id'
    ";
    
    if (mysqli_query($dbcon, $sql)) {
 echo "Record deleted successfully";
} else {
 echo "Error deleting record: " . mysqli_error($dbcon);
}
    
    ?><script>
window.location="view.php";
</script><?php
}
?>

