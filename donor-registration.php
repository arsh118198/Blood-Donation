<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script src="js/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <link rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <style>
    .registration
          {
              font-style: normal;
              margin-top: 20px;
              text-transform: uppercase;
          }
          input[type="text"],input[type="password"],input[type="email"]
          {
              width: 280px;
          }
           input[type="button"]
          {
              background-color: beige;
              color: red;
              
          }
          #address
          {
              width: 350px;
          }
          #information
          {
              width: 700px;
              height: 100px;
              margin-left: 120px;
          }
          form
          {
              height: 800px;
              border:1px solid black;
              margin-top:40px; 
              width:1100px;
              border-radius: 20px;
          }
    </style>
    <script>
    function showPrev(file)
        {
            if (file.files && file.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $('#prev').prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }
        }
    </script>
</head>
<body>
    <div class="container-fluid bg-secondary mt-5" style="height:100px; ">
        <div class="row">
    <div class="registration "><b><h1>blood registration form</h1></b></div> 
            </div>
    </div>
    <center>
    <form  method="post" enctype="multipart/form-data" action="donor-process.php" >
   <div class="row" style="margin-top:40px;">
       <div class="col-md-5">
           <div class="form-group col-md-6">
      <label for="uid">Uid</label>
      <input type="email" class="form-control" id="uid" placeholder=" Enter Uid" name="uid">
      <input type="submit" name="Fetch" value="Fetch" style="margin-top:5px;">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

  <div class="form-group col-md-6" style="margin-top:43px;">
    <label for="Address">Address</label>
    <input type="text" class="form-control" id="address" placeholder=" EnterAddress" name="address">
  </div>
    </div>
    <div class="form-group col-md-4">
      <h6>Profile Pic:</h6>
      <div class="form-group col-md-4">                    
    <input type="file" name="pic" onChange="showPrev(this);">
    <img width="200" height="140" id="prev" style="border:2px solid red;
     margin-top:20px; border-radius:30px;">
     </div>
      <div class="col-md-6" style="width:inline;margin-left:50px">
          <label for="Phone Number">Phone Number</label>
          <input type="text" placeholder="Phone Number" class="form-control" id="phone"
          name="phn">
      </div>
    </div>
   </div>
   <div class="row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
    </div>
    <div class="form-group col-md-3" style="margin-left:32px;">
      <label for="inputGender">Gender</label>
      <select id="inputgender" class="form-control" name="gender">
        <option selected>Choose Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
    </div>
    <div class="form-group col-md-2" style="margin-left:20px;">
      <label for="inputAge">Age</label>
      <input type="number" class="form-control" id="inputage" placeholder="Enter Age" name="age">
    </div>
  </div>
  <div class="row">
     <div class="col-md-5">
      <div class="form-group col-md-6" >
      <label for="inputBlood">Blood Group</label>
      <select id="inputblood" class="form-control" name="bloodgroup">
        <option selected>Choose Group</option>
        <option value="Op">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="Bp">B+</option>
        <option value="B-">B-</option>
        <option value="ABp">AB+</option>
        <option value="AB-">AB-</option>
      </select>
    </div> 
  </div>
       <div class="col-md-6">
           <label for="inputpast">How many times blood donated earlier?</label>
           <input type="text" class="form-control" placeholder="Enter Times" id="inputpast" name="inputpast">
       </div>
        </div>
        <div class="row" style="margin-top:20px;">
         <div class="col-md-6">
          <label for="inputinformation">Other Information</label> 
          <input type="text" id="information" placeholder="Enter Information" class="form-control" name="information">
          </div> 
        </div>
        <div class="row" style="margin-left:400px; margin-top:50px;" >
            <div class="col-md-5">
                <input type="submit" name="submit" style="background-color:#47e727; width:100px; height:40px; border-radius:5px;">
                <input type="submit" value="Update" style="background-color:#0cc7d8; width:100px; height:40px; border-radius:5px;">
        </div>
            </div>
                
        
  
</form>
</center>
</body>
</html>