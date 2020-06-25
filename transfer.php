<?php
    require 'dbConnect.php';
    $name=$_GET['name'];
    $query = "select * from users where name='".$name."'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    
    $query = "select name from users where name<>'".$row['name']."'";
    $result = mysqli_query($con,$query);
    if(isset($_POST['transfer'])){
        if($_POST['credits_tr']>$row['credit']){
            echo"Credit Transered cannot be more than".$row['credit']."<br>";
        }
         else{
          $query = "update users set credit=credit-" . $_POST['credits_tr'] . " where name='" . $row['name'] . "'";
            mysqli_query($con,$query);

            $query = "update users set credit=credit+" . $_POST['credits_tr'] . " where name='" . $_POST['to_user'] . "'";
            mysqli_query($con,$query);

            $query = "insert into transfers values('" . $row['name'] . "','" . $_POST['to_user'] . "'," . $_POST['credits_tr'] . ")";
            mysqli_query($con,$query);

            header("Location: index.php");
     }
    }
    
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <nav class="nav navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> <br><br>
        Hello <?php echo $row['name'] ?>,
        <br>
        Your credits are: <?php echo $row['credit'] ?>
        <br><br></h3>
  </div>
  <div class="panel-body">
      <form action="#" method="post">
            <fieldset>
                <legend>Transfer details</legend>
                Credits: <input type="number" name="credits_tr" min =0 value=1 required>
                <br><br>
                Transfer to: <select name="to_user" required>
                    <option value =""></option>

                <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

                </select>
                <br>
            </fieldset>
            <br>
            <input type="submit" name="transfer" value="Transfer" class="btn btn-primary">
        </form>
  </div>
</div>
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
