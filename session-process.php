<?php
session_start();
$btn=$_GET["btn"];
if($btn=="add")
{
    $uid=$_GET["uid"];

    $_SESSION["uid"]=$uid;

    echo $_SESSION["uid"];
}
else if($btn=="fetch")
{
    if(isset($_SESSION["uid"])==true)
        echo $_SESSION["uid"];
    else
        echo "sorry";
}
else
{
    session_destroy();
    session_unset();
    header("location:sessionFront.php");
}


?>