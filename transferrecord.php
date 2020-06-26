<?php
    require 'dbConnect.php';
    require 'header.php';
?>
<?php
    $query="SELECT * FROM transfers";
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
        <title></title>
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
           <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"></h3>
  </div>
  <div class="panel-body">
       <table class="table table-hover table-striped table-bordered ">
   <caption><h4><span class="glyphicon glyphicon-leaf" ></span></h4></caption>
    <tr class="info"><th>S.No</th><th>From</th> <th> To </th><th>Credit Transfered</th><th>
  </div>
</div>
        <?php
        $i=1;
        while ($row=  mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>'.$i.'</td>';
            echo "<td>" . $row["from_user"] . "</td>";
            echo "<td>" . $row["to_user"] . "</td>";
            echo "<td>" . $row["credits_tr"] . "</td>";
            //echo '<td><a href=transfer.php?name='.$row['name'].'><span class="glyphicon glyphicon-plus"></span></a><td>';
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
