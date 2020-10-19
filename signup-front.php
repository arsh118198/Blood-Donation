<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
    
        $(document).ready(function()
        {
            
            $(document).ajaxStart(function(){
                $("#wait").css("display","inline");
            });
            $(document).ajaxStop(function(){
                $("#wait").css("display","none");
            });
            
            
            $("#uid").keyup(function(){
                $uid=$("#uid").val();
                    $.get("ajax-chk-uid.php?uid="+$uid,function(result){
                        $("#errUid").html(result);
                    });
            });
            //-------------------------
            
            $("#btnFetch").click(function(){
                var uid=$("#uid").val();
                var url="json-fetch-one.php?uid="+uid;
                //Java Script Object Notation
                $.getJSON(url,function(objectAry)
                    {
                      if(objectAry.length==0)
                        {
                            alert("No record found");
                            return;
                        }
                      var inString=JSON.stringify(objectAry);
                        $("#pwd").val(objectAry[0].pwd);
                        $("#mob").val(objectAry[0].mobile);
                        $("#img").prop("src","uploads/"+objectAry[0].pic);
                    });
            });
            //============all uids=======
            $("#btnFetchAllUids").click(function(){
                $.getJSON("json-fetch-all-uids.php",function(jsonAry){
                    alert(JSON.stringify(jsonAry));
                    $("#uids").empty();
                    
                    for(i=0;i<jsonAry.length;i++)
                        {
        $("#uids").append("<option value="+jsonAry[i].uid+">"+jsonAry[i].uid+"</option>");  
                        }
                });
            });
            //=============
            $("#uids").change(function(){
                alert($("#uids").val());
            });
               
        });
       
    </script>
    <style>
        #wait{ display: none;
            zoom:.8;
        }
    </style>
</head>

<body>
   <center>
    <div class="btn btn-outline-primary  mt-5" data-toggle="modal" data-target="#modalSignup">Signup</div>
    
    </center> 
    <hr>

    <!-- Signup Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalSignup">
        <div class="modal-dialog" role="document">
           <form action="signup-process.php" method="post" enctype="multipart/form-data" id="signup">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Signup-GET 
                        <img id="wait" src="pics/processing_animated.gif">
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">UID</label>
                            <span id="errUid">*</span>
                            
                            
                            <input type="email" class="form-control" id="uid" name="uid" required  placeholder="Enter email" >
                            
                           
                            
                            <input type="button" value="Fetch" id="btnFetch">
                            
                            <hr>
                             All uids :<select id="uids" >
                                <option value="none">None</option>
                            </select>
                            <input type="button" value="fetchAll Uids" id="btnFetchAllUids">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password"  class="form-control" id="pwd" name="pwd" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" >
                            <small id="emailHelp" class="form-text text-muted">
                            Password plz...</small>
                        </div>
                       <div class="form-group">
                            <label for="exampleInputPassword1">Mobile</label>
                            <input type="text" class="form-control" id="mob" name="mob" required placeholder="Mobile number" >
                            <small id="emailHelp" class="form-text text-muted">
                            Enter Mobile Number</small>
                        </div> 
                        <div class="form-group">
                            <label >Profile pic</label>
                            <input type="file" class="form-control" id="pic" name="pic"  value="5363366">
                           
                            <center> 
                            <img src="" width="100" height="100" id="img">
                            </center>
                            
                        </div>
                    </div>
                    
                    
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="btn" value="signup">Signup</button>
                    <button type="submit" class="btn btn-primary" name="btn" value="update">Update</button>
                    <button type="submit" class="btn btn-primary" name="btn" value="delete">Delete</button>
                    <a  href="mysql-show-all-records.php" class="btn btn-primary" >Show All</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>