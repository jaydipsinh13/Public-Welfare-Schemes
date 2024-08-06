<?php
require 'dbcon.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Application - Taluka Panchayat</title>
    
    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">

 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<body>

<div class="main-div">
    <div class="container-body" id="main-body">
        <h1 style="text-align: center;"><b>Track Your Application</b></h1>
        
        <!-- Track ID -->
        <h4>Track ID</h4>
        <input type="text" class="form-control" placeholder="Enter your track id" id="trackid">
       
        <br>

        <button class='btn btn-primary shadow-none' onclick="showcontainer()">Find &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg></i></button>

        <br>  <br>  <br>
        <div class="container" id="container">  
            <table class="table table-bordered" id="table-track">
              <thead>
                <tr>
                <th>Application Track ID</th>
                <th>Name</th>
                <th>Mobile number</th>
                <th>Status</th>
                <th>Remark</th>
                <th>View</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>123</td>
                  <td>RAKESH KUMAR</td>
                  <td>987412563</td>
                  <td>Pending</td>
                  <td>No Remark</td>
                  <td><a href="index.html">Download</a></td>
                </tr>
                
              </tbody>
            </table>
          </div>

    </div>
    
</div>
</body>
</html>