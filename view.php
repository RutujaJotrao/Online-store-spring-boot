<?php
include('read-script.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="formt.css">
<title>PHP CRUD Operations</title>
</head>

<body>
<div class="table-data">
    <div class="list-title">
        <h2><span>Customer details </span></h2><a href="customer.php" class="boxBtn">Add Customer</a><br>
    </div>

    <table border="1">
        <thead>
            <th><u>Sr. No.</u></th>
            <th><u>Customer ID</u></th>
            <th><u>Full Name</u></th>
            <th><u>Email Address</u></th>
            <th><u>Phone</u></th>
            <th><u>Shop</u></th>
            <th><u>Delete</u></th>
            <th><u>Orders</u></th>
        </thead>       
<?php
        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){          
?>
<tbody>
<tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['cusid']; ?></td>
<td><?php echo $data['full_name']; ?></td>
<td><?php echo $data['email_address']; ?></td>
<td><?php echo $data['number']; ?></td>
<td><a href="product.php?edit=<?php echo $data['cusid']; ?>"class="Btn1">Add</a></td>
<td><a href="deletecus.php?delete=<?php echo $data['cusid']; ?>"class="Btn2">Delete</a></td>
<td><a href="orders.php?view=<?php echo $data['cusid']; ?>"class="Btn2">view</a></td>
</tr> 

<?php
    $sn++;
        }
        }
        else{         
?>
      <tr>
        <td colspan="7"><center>No Data Found</center></td>
      </tr>               
<?php
    }
?> 
</tbody>
    </table>
    </div>
</body>
</html>