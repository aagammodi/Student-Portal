<?php include('server.php') ?>
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
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>