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
        $name=$_POST["name"];
        $address=$_POST["address"];
        $phn=$_POST["phn"];
        $city=$_POST["city"];
    $gender=$_POST["gender"];
    $age=$_POST["age"];
    $bloodgroup=$_POST["bloodgroup"];
    $inputpast=$_POST["inputpast"];
    $information=$_POST["information"];
        $pic=$_FILES["pic"]["name"];
    if($pic=="")
    {
        header("location:pic-upload-error.php?uid=".$uid);
        return;
    }
    move_uploaded_file($_FILES["pic"]["tmp_name"],"uploads/".$pic);
    
    $query="insert into donorreg values('$uid','$name','$address','$phn','$city','$gender','$age','$bloodgroup',
    '$inputpast','$information','$pic')";
    mysqli_query($dbcon,$query);
    if(mysqli_affected_rows($dbcon)==1)
        header("location:donor-registration.php");
    else
        echo "Error".mysqli_error($dbcon);
    ?>
</body>
</html>