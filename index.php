<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

<style>
	button
	{
       background-color:#5F9EA0;
	   color:white;
	   
	   transition: width 0.1s, height 0.1s, transform 0.1s;
	}

	button:hover
	{
		transform: scale(1.125,1.125);
		color:yellow;
	}


	.forlogofont{
				font-size: 400%;
				font-weight: 700;
				/* color: darkkhaki; */
				text-align: center;
				/* font-size: 80px; */
				/*font-weight: 700;*/
				padding: 90px;

			}	
	
</style>
</head>
<body style="background-image:url('bg.jpg');background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;">
	  <div class="forlogo">	
			 
			 <div class="forlogofont" style="color:lightgrey;background-color: rgba(0,0,0,0.7);">
				 <b><u>STUDENT RESOURCE</u></b>
				 <!-- <hr style="width: 830px; height: 0px; outline-width: 0px; border-color: darkkhaki;margin-left: 80px;"> -->
			 </div>
		 </div>

<div float:center; class="header">
	<h2>Home Page</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<br><br><br>

<div>
	<pre style="margin-left:34%">
	  <a href=" home.php"><button style="padding:20px;font-size:large;"><b>Click here for Books and More...</b></button></a>
	</pre>
</div>

</body>
</html>