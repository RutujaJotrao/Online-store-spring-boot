<?php
include('database.php');
if(isset($_POST['create'])){   
  $msg=insert_data($connection);
}

function insert_data($connection){
   
      $cusid= ($_POST['cusid']);
      $full_name= legal_input($_POST['full_name']);
      $email_address= legal_input($_POST['email_address']);
      $phone= legal_input($_POST['number']);
      $query="INSERT INTO customer_details (cusid,full_name,email_address,number) VALUES ('$cusid','$full_name','$email_address','$phone')";
      $exec= mysqli_query($connection,$query);
      
      if($exec){
        header('location:view.php');
       }
      else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
        echo "<script>alert('$msg');</script>";
      }
}

function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>