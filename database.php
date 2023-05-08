<?php
$hostname="localhost";
$username="root";
$password="Shreyansh_07";
$databasename="crud";
$connection=mysqli_connect($hostname,$username,$password,$databasename);
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
// else{
//     echo("Connection established!");
// }
?>