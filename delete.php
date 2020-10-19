<?php
    
include_once("connection.php");
$uid=$_GET["uid"];
$query="delete from donorreg where nuid='$uid'";
$table=mysqli_query($dbcon,$query);

if(mysqli_affected_rows($dbcon)==0)
    echo "Invalid id";
else
    echo "Record Deleted";

?>