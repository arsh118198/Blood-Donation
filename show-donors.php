<html>

<head>
    <title>All Donors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="JS/bootstrap.min.js"></script>
    <script src="angular.min.js" type="text/javascript"></script>
    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {
            //========================================
            $scope.jsonary;
            //========================================
            $scope.bloodgroup;
            //====================
            $scope.fetchall = function()
            {
               
                var url = "Json-fetch-all.php?bg="+$scope.group+"&city="+$scope.selCity.ncity;
                $http.get(url).then(ok, notok);

                function ok(response) {
                    $scope.jsonary = response.data;
                }

                function notok(response) {
                    alert("ERROR");
                }
            }
            //========================================
            $scope.showDetails = function(uid) {
                location.href = "Detail-page.php?uid=" + uid;
            }
            //========================================
            $scope.jsonCity;
            $scope.fetchallCity = function()
            {
                //alert($scope.group);
                var url = "Json-fetch-cities.php";
                $http.get(url).then(ok, notok);

                function ok(response) {
                    $scope.jsonCity = response.data;
                   
                }

                function notok(response) {
                    alert("ERROR");
                }
            }
            $scope.selCity;//=$scope.jsonCity[0].City;
        });

    </script>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="fetchallCity();">
   <div class="container-fluid bg-danger text-center mt-5" style="height:80px;">
   <label style="font-size:40px; margin-top:8px;">BLOOD SEARCH</label>
   </div> 
    <div class="container" style="margin-top:20px;">
        <!-- ============================================= -->
        <center>
          <label>City&nbsp;&nbsp;</label>
           <select ng-model="selCity" ng-options="obj.ncity for obj in jsonCity">

        </select> 
        <br> 
        <label style="margin-top:20px;">Blood Group&nbsp;&nbsp;</label> 
        <select ng-model="group">
        <option value="Op">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="Bp">B+</option>
        <option value="B-">B-</option>
        <option value="ABp">AB+</option>
        <option value="AB-">AB-</option>
      </select>
           <br>
            <div class="btn btn-outline-danger btn-lg mt-4" ng-click="fetchall();">FetchAll</div>
        </center>
        <!-- ============================================= -->
        <div class="row mt-3">
            <div class="col-md-4" ng-repeat="record in jsonary">
                <div class="card">
                    <img class="card-img-top" height="250" src="Uploads/{{record.npic}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Name:&nbsp;&nbsp;{{record.nname}}</h5>
                        <h6 class="card-text">ID:&nbsp;&nbsp;{{record.uid}}</h6>
                        <h6 class="card-text">City:&nbsp;&nbsp;{{record.ncity}}</h6>
                        
                        <h6 class="card-text" ng-if="record.nbloodgrp=='Op'">Blood Group:&nbsp;&nbsp;O+</h6>
                         <h6 class="card-text" ng-if="record.nbloodgrp=='Ap'">Blood Group:&nbsp;&nbsp;A+</h6>
                          <h6 class="card-text" ng-if="record.nbloodgrp=='Bp'">Blood Group:&nbsp;&nbsp;B+</h6>
                           <h6 class="card-text" ng-if="record.nbloodgrp=='ABp'">Blood Group:&nbsp;&nbsp;AB+</h6>
                            <h6 class="card-text" ng-if="record.nbloodgrp=='O-'">Blood Group:&nbsp;&nbsp;O-</h6>
                             <h6 class="card-text" ng-if="record.nbloodgrp=='A-'">Blood Group:&nbsp;&nbsp;A-</h6>
                              <h6 class="card-text" ng-if="record.nbloodgrp=='B-'">Blood Group:&nbsp;&nbsp;B-</h6>
                               <h6 class="card-text" ng-if="record.nbloodgrp=='AB-'">Blood Group:&nbsp;&nbsp;AB-</h6>
                        <div class="btn btn-outline-danger" ng-click="showDetails(record.uid);">Details</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================= -->
    </div>

</body>

</html>
