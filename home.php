



<?php include('session.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style = "margin-top:15% ; background-image: url('img/background_img.png') ; height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin: 250px auto">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="home.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Take Test</button>
  	</div>
  	
  </form>


</body>
</html>