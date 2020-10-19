<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    
        span{
            color:red;
        }
    
    </style>
</head>
<body>
   <h2>Welcome Mr.<span><?php echo $_GET["uid"];?></span></h2>
    <h1> Please upload a pic to proceed...</h1>
    <a href="needy-registration.php"> << Try Again</a>
</body>
</html>