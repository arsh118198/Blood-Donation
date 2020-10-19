<?php
    
include_once("connection.php");

$bloodgroup=$_GET["bg"];
$city=$_GET["city"];

$query="select * from donorreg where nbloodgrp='$bloodgroup' and ncity='$city'";
$table=mysqli_query($dbcon,$query);
$ary=array();

while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}
echo json_encode($ary);
?>
