<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	
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
      <div class="container" align="center">
	  <!--<img class="img-responsive  img-circle img-thumbnail" src="mike.jpg"> -->
        <h1 id="aname">MYSQL Address Book</h1>
		<hr class="star-light">
		<h3 id="title"> Author: mjl566</h3>
   
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
			
			
			$sql = "Update AddressBook 
				SET firstname = '".$_POST['fname']."',
					lastname = '".$_POST['lname']."',
					company = '".$_POST['company']."',
					phone = '".$_POST['phone']."',
					email = '".$_POST['email']."',
					url = '".$_POST['url']."',
					address = '".$_POST['address']."',
					birthday = '".$_POST['birthday']."',
					add_date = '".$_POST['add_date']."'	
				WHERE id=".$_POST['contact_id'];
				
			if($conn->query($sql) == TRUE)
				echo "<p>Contact Updated!</p>";
			else
				echo "\nError updating contact: ".$conn->error;
		 ?> 
		 <a href="home.php">Back to Contacts </a>
        
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