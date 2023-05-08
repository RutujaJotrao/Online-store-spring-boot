<?php
include('customerscript.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<link rel="stylesheet" href="form.css">
</head>

<body>
<div class="customer-detail">
    <div class="form-title">
    <h2>Add Customer Details</h2>
    </div>

    <form method="post" action="">
          <label>Customer ID</label>
          <input type="number" placeholder="Enter 5 digit Customer ID" name="cusid" required>
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="full_name" required>
          <label>Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="email_address" required>
          <label>Phone No.</label>
          <input type="number" placeholder="Enter 10 digit phone number" name="number" required>
          <button type="submit" name="create">Add Data</button>
    </form>

</div>
</body>
</html>