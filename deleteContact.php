<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MySQL Address Book</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


	
	<style>
	 .drop-shadow {
        -webkit-box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, .5);
	</style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    
	<div class="jumbotron" id="jumbotron">
      <div class="container" align="center" style="color:white">
	  <!--<img class="img-responsive  img-circle img-thumbnail" src="mike.jpg"> -->
        <h1 id="aname">MYSQL Address Book</h1>
		<hr class="star-light">
		<h3 id="title"> Author: mjl566 & roh919</h3>
   
      </div>
    </div>



    

    <div class="container">

      <!-- Three columns of text below the carousel -->
      <div class="row">
		<?php
			$servername="lovett.usask.ca";
			$username = "cmpt350_mjl566";
			$dbname = "cmpt350_mjl566";
			$password = "j3n1l21kn0";
			
			$conn = new mysqli($servername,$username,$password,$dbname);
			
			if($conn->connect_error){
				die("Connection failed: ".$conn->connect_error);
			}
			
			$id=$_GET['ContactID'];
			$sql = "DELETE FROM AddressBook WHERE id=".$id;
				
			if($conn->query($sql) == TRUE)
				echo  "<div class='alert alert-success' role='alert'><h1>Contact has been Deleted!</h1> You are being redirected <a href='home.php'alert-link'>Home.</a></div>";
			else
				echo  "<div class='alert alert-danger' role='alert'>Error deleting contact :".$e->getMessage()."</div><a href='home.php'alert-link'>Go Home.</a>";
				
			header("Refresh: 5; url=home.php");
		 ?> 
        
      </div><!-- /.row -->


      


      <!-- FOOTER -->
      <footer>
       
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>