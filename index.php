<?php
    require 'dbConnect.php';
    require 'header.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Credit Management</title>
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<div class="jumbotron">
        <div class="panel panel-default">
            <div class="panel-body"><h1><center>Credit Management System</center></h1></div>
        </div>
    </div>
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card-group">
        <div class="card" style="margin-left: 20px;border-radius: 20px;">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="card-body-icon">
                    <center><i class="fa fa-fw fa-address-book" style="padding-top: 6px;"></i></center>
                    </div>
                    <center>
                    <div><h3><b>Users</b></h3></div>
                    </center>
                </div>
                <a href="viewuser.php">
                    <span class="float-left"><h5><b>View all users</b></h5></span>
                    <span class="float-right">
                    <i class="fa fa-angle-right fa-3x"></i>
                    </span>
                </a>
            </div>
        </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card-group">
        <div class="card" style="margin-left: 20px;border-radius: 20px;">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <div class="card-body-icon">
                    <center><i class="fa fa-fw fa-file" style="padding-top: 6px;"></i></center>
                    </div>
                    <center>
                    <div><h3><b>Records</b></h3></div>
                    </center>
                </div>
                <a href="transferrecord.php">
                    <span class="float-left"><h5><b>Transfer Records</b></h5></span>
                    <span class="float-right">
                    <i class="fa fa-angle-right fa-3x"></i>
                    </span>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
    <footer>
	<div class="container">
            <center>
		Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Credit Management.
		All Rights Reserved | Contact Us: +91 90000 00000
            </center>
	</div>
</footer>
</html>