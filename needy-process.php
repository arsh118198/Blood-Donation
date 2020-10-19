<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("connection.php");
    $uid=$_POST["uid"];
        $uname=$_POST["uname"];
    $gender=$_POST["gender"];
        $address=$_POST["address"];
    $city=$_POST["city"];
        $state=$_POST["state"];
    $aadhar=$_POST["aadhar"];
    $mobile=$_POST["mobile"];
    $query="insert into needyreg values('$uid','$uname','$gender','$address','$city','$state','$aadhar','$mobile')";
    mysqli_query($dbcon,$query);
    if(mysqli_affected_rows($dbcon)==1)
        header("location:needydash.php");
    else
        echo "Error".mysqli_error($dbcon);
    ?>
</body>
</html>