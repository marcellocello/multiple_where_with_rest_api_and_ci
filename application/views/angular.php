<html ng-app="app_pertamaku">
 <meta charset="utf-8">
 <head>
  <title>Dokumen Angular Pertama</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 </head>
 <body>
  <h1>ANGULAR.JS : Menampilkan data</h1>
  <div ng-controller="ini_controller">
   <table class="table">
    <thead>
     <tr>
      <th>NIS</th>
      <th>Nama</th>
      <th>Nilai</th>
      <th>JK</th>
     </tr>
    </thead>
    <tbody>
     <tr ng-repeat="data_angularnya">
      <td>{{val.nis}}</td>
      <td>{{val.nama}}</td>
      <td>{{val.nilai}}</td>
      <td>
       <b><span class="text-success" ng-show="val.jk=='pria'">Pria</span>
       <span class="text-danger" ng-show="val.jk=='wanita'">Wanita</span></b>
      </td>
     </tr>
    </tbody>
   </table>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  <script>
   var app=angular.module('app_pertamaku',[]);
   app.controller('ini_controller',function($scope,$http){
    $scope.data_angularnya=[];
    $http.get("<?php echo site_url('angular/data_angularnya');?>").success(function(result){
     $scope.data_angularnya=result;
    });
    
   });
  </script>
 </body>
</html>