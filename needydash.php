<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><script src="js/bootstrap.min.js" type="text/javascript"></script>
   
      <style>
    .needyreg
          {
              margin-top: 20px;
              font-weight: lighter;
          }
          .card
          {
              background-color: palegreen;
          }
    </style>
   
</head>
<body>

 
   
    <div class="container-fluid bg-secondary" style="height:100px; margin-top:70px;" >
        <div class="row">
            <div class="needyreg">
            <h1>NEEDY REGISTRATION</h1>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="card text-center" style="width: 18rem;height: 25rem; margin-top:100px; margin-left:150px;">
  <img class="card-img-top" src="photos/needy3.jpg" alt="Card image cap"286x180>
  <div class="card-body">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSignup">
  Needy Profile
</button>

  </div>
</div>
  <div class="card text-center" style="width: 18rem;height: 25rem; margin-top:100px; margin-left:150px;">
  <img class="card-img-top" src="photos/needy2.jpg" alt="Card image cap"286x180 style="height:307px;">
  <div class="card-body">
    <a href="show-donors.php" class="btn btn-primary ">Blood Search</a>
  </div>
</div>
  <div class="card text-center" style="width: 18rem;height: 25rem; margin-top:100px; margin-left:150px;">
  <img class="card-img-top" src="photos/needy4.jpg" alt="Card image cap"286x180 style="height:307px;">
  <div class="card-body">
    <a href="#" class="btn btn-primary ">Log Out</a>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="needy-process.php" method="post" enctype="multipart/form-data" id="signup">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Needy Profile:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-md-9">
               <div class="form-group">
                   <label for="uid">Uid</label>
      <input type="email" class="form-control" id="uid" placeholder=" Enter Uid" name="uid">
               </div>
                </div>
               <div class=" col-md-2" style="margin-top:32px;">
                   <input type="submit" name="Fetch" value="Fetch" 
                   class="btn btn-primary btn-outline-danger">
                   </div>   
           </div>
        
             <div class="row">
               <div class="col-md-5">
                  <label for="username">User Name</label>
                  <input type="text"  class="form-control" id="uname" placeholder=" Enter User Name" name="uname">  
               </div>
               <div class="col-md-5 offset-1">
                   <label for="inputGender">Gender</label>
      <select id="inputgender" class="form-control" name="gender">
        <option selected>Choose Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
             `  </div>
       </div>
       
       <div class="row">
         <div class="col-md-9">
             <label for="Address">Address</label>
    <input type="text" class="form-control" id="address" placeholder=" EnterAddress" name="address">
         </div>
       </div>
       <div class="row">
           <div class="col-md-5">
             <label for="inputCity">City</label>
      <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
         </div> 
         <div class="col-md-5 offset-1">
           <label for="inputState">State</label>
     <select id="inputstate" class="form-control" name="state">
        <option selected>Choose State</option>
        <option>Punjab</option>
        <option>Haryana</option>
        <option>Himachal Pradesh</option>
      </select> 
         </div> 
       </div>
       <div class="row">
           <div class="col-md-6">
             <label for="inputAadhar">Aadhar Card Number</label>
      <input type="text" class="form-control" id="aadhar" placeholder="Enter Aadhar Number" name="aadhar">  
           </div>
           <div class="col-md-6">
              <label for="inputMobile">Mobile Number</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile"> 
           </div>
       </div>
       <div class="row">
           <div class="col-md-10">
              <label for="inputOrganisation">Organisational</label>
      <input type="text" class="form-control" id="organisation" placeholder="Organisation" name="organisation">   
           </div>
       </div>
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" >Update</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
          </form>
    </div>
  </div>
</div>
</body>
</html>