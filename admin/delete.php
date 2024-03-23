<?php

include 'connection/connection.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];

$sql="DELETE FROM `user` WHERE id='$id'";

$aarr= mysqli_query($connect,$sql);

if($aarr){
    echo "one row deleted from your database";
}
else
{
    echo "one row deleted from your database";
}
}



?>