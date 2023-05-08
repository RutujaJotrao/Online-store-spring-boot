<?php
include("database.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($connection, $id);

}
function delete_data($connection, $id){
   
    $query="DELETE from customer_details WHERE cusid=$id";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:view.php');
    }else{
      $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo "<script>alert('$msg');</script>";
    }
}
?>