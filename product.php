<?php
include('proscript.php');
include("database.php");

if(isset($_GET['edit'])){
    $cusid= $_GET['edit'];
}

if(isset($_GET['add'])){
    $cusid= $_GET['edit'];
    $proid= $_GET['add'];
    add_pro($connection, $cusid, $proid);
}

function add_pro($connection, $cusid, $proid){

    if(isset($_GET['edit'])){
        $proid= $_GET['edit'];
    }

    $query="INSERT INTO orders (cusid, proid) VALUES ('$cusid','$proid')";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:view.php');
    }else{
      $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo "<script>alert('$msg');</script>";
    }
}
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
        <h2><span>Product details </span></h2>
    </div>

    <table border="1">
        <thead>
            <th><u>Sr. No.</u></th>
            <th><u>Product ID</u></th>
            <th><u>Product Name</u></th>
            <th><u>Cost</u></th>
            <th><u>Add</u></th>
        </thead>       
<?php
        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){          
?>
<tbody>
<tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['proid']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['cost']; ?></td>
<td><a href="product.php?add=<?php echo $data['proid']; ?>"class="Btn1">Add</a></td>
</tr> 

<?php
    $sn++;
        }
        }
        else{         
?>
      <tr>
        <td colspan="5"><center>No Data Found</center></td>
      </tr>               
<?php
    }
?> 
</tbody>
    </table>
    </div>
</body>
</html>