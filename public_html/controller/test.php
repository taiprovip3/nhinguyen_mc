<?php
    include '../../database/connectDB.php';
    $sql = "select name from files where id = 8";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_array($result);
echo $row[0];
} else echo "NO < 0";
    $con -> close();
?>