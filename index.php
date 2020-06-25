<?php
    require 'dbConnect.php';
    $query="SELECT * FROM users";
    $result=  mysqli_query($con, $query);
    
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
    </head>
    <body>  <nav class="nav navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
              <li><a href="transfer.php"><span class="glyphicon glyphicon-share-alt"></span>Transfer</a></li>
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">
       <table class="table table-hover table-striped table-bordered ">
   <caption><h4><span class="glyphicon glyphicon-leaf" ></span></h4></caption>
    <tr class="info"><th>S.No</th><th>Name</th> <th> Email </th><th>Credit </th><th>
  </div>
</div>
        <?php
        $i=1;
        while ($row=  mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>'.$i.'</td>';
            echo '<td>'.'<a href=transfer.php?name=</a>'.$row['name'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['credit'].'</td>';
            echo '<td><a href=transfer.php?name=' . $row['name'] . '><span class="glyphicon glyphicon-plus"></span></a><td>';
            echo '</tr>';
            ++$i;
        }
        ?>
</table>
    </body>
    <footer>
	<div class="container">
            <center>
		Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Credit Management.
		All Rights Reserved | Contact Us: +91 90000 00000
            </center>
	</div>
</footer>
</html>
