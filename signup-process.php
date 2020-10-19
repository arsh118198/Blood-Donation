
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

include_once("connection.php");

$btn=$_POST["btn"];
if($btn=="signup")
    doSignup($dbcon);
else
    if($btn=="delete")
        doDelete($dbcon);
else
    if($btn=="update")
        doUpdate($dbcon);
/*else
    if($btn=="showall")
        doShowAll($dbcon);*/

/*function doShowAll($dbcon)
{
    $query="select * from users2018";
    $table= mysqli_query($dbcon,$query);
    $countRows=mysqli_num_rows($table);
    
    echo $countRows." Records Fetched";

?>
    
    <center><table width='400' border='1'>
    <tr><th>UID<th>Password<th>Mobile"

<?php    
    while($row=mysqli_fetch_array($table))
    {
        //print_r($row);
        echo "<tr><td>".$row["uid"]."<td>".$row["pwd"]."<td>".$row["mobile"];
?>
               
        <td><img src=uploads/<?php echo $row["pic"]?> width=100 height=100>
<?php        
    }
    
    
}*/
function doSignup($dbcon)
{
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $mobile=$_POST["mob"];
    $pic=$_FILES["pic"]["name"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"uploads/".$pic);

    $query="insert into registration values('$uid','$pwd','$mobile','$pic',curdate(),curtime())";
    mysqli_query($dbcon,$query);

    if(mysqli_error($dbcon)=="")
        echo "Record Saved...";
    else
        echo "There is error:".mysqli_error($dbcon);
}
function doUpdate($dbcon)
{
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $mobile=$_POST["mob"];
    $pic=$_FILES["pic"]["name"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"uploads/".$pic);

    $query="update  registration set pwd='$pwd',mobile='$mobile',pic='$pic' where uid='$uid'";
    mysqli_query($dbcon,$query);
    $count=mysqli_affected_rows($dbcon);
    if($count==0)
        echo "Invalid id";
    else
        echo $count." Rows Updated";
}
function doDelete($dbcon)
{
    $uid=$_POST["uid"];
    
    $query="delete from registration where uid='$uid'";
    mysqli_query($dbcon,$query);

    $count=mysqli_affected_rows($dbcon);
    if($count==0)
        echo "Invalid id";
    else
        echo $count." Rows Deleted";
}

?>

</body>

</html>
