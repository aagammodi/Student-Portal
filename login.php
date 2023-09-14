<?php include('server.php') ?>

<?php
if(isset($_SESSION['username']))
{
    
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<style>
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
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image:url('bg.jpg');background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;">

	    <div class="forlogo">	
			 
			    <div class="forlogofont" style="color:lightgrey;background-color: rgba(0,0,0,0.7);">
				 <b><u>STUDENT RESOURCE</u></b>
				</div>
	    </div>
		 
     <div class="header">
  	<h2>Login</h2>
		</div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	  
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  
</body>
</html>