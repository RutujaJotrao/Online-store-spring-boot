<?php
include('database.php');

if(isset($_GET['view'])){
    $cusid= $_GET['view'];
    $fetchData=view_data($connection, $cusid);
}

function view_data($connection, $cusid){
    
    $query="SELECT * from orders where cusid=$cusid";
    $exec=mysqli_query($connection, $query);
    if(mysqli_num_rows($exec)>0){
        $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;  
            
    }else{
        return $row=[];
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
<td><a href="orders.php?edit=<?php echo $data['id']; ?>"class="Btn1">Edit</a></td>
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