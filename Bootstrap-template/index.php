<?php

include ("server.php");

//if user not logged in, they can't have access
if (empty($_SESSION['username'])){
	header('location: loginn.php');
}

else {
    // Makes it easier to read
    $username = $_SESSION['username'];
    $email    = $_SESSION['email'];
	  $password = $_SESSION['password'];
    $active   = $_SESSION['active'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registeration, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<a href="loginn.php" onclick="signOut();">Sign out</a>

<body background="homeBG.jpg">
<!--<div class="p-3 mb-2 bg-info text-white">PCHC</div>-->
<div class="container">
<div class="jumbotron">
<h1>Home Page</h1>
<p>Here!</p></div>


<div class="container" class="container-fluid">

<div class="content">
	<?php if( isset($_SESSION['success']) && !empty($_SESSION['success']) ): ?>
			<div class="error success">
				<h3>
				<?php 
					  echo  ($_SESSION['success']);
	          unset ($_SESSION['success']);
				 ?>
				 </h3>

			</div>
			
			
	<?php endif ?>
	

	<?php if(isset($_SESSION['username'])): ?>
		<p> Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
		<p><a href ="reg.php?logout='1' " style="color: red;">Logout</a></p>
	<?php endif //ends the if statement?>
</div>


</body>
</html> 

