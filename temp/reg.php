<?php include ("server.php");?>

<!DOCTYPE html>

<head>
<meta charset="UTF-8">
<meta name="description" content="Video search">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
<meta name="viewport" content="width=device-width, initial-scale=.0">



<!--<title>Register Page!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

-->

<link rel="stylesheet" href="style4.css">


<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">
</head>

<body background="homeBG.jpg">
<!--<div class="p-3 mb-2 bg-info text-white">PCHC</div>-->
<div class="container">
<div class="jumbotron">
<h1>Registration</h1>
<p>Here!</p></div>


<div class="container" class="container-fluid">
  <form id="signup" class="form-horizontal" action ="reg.php" method="post" enctype="multipart/form-data" autocomplete="on">
  <!--display validation errors here-->
  <?php include('errors.php'); ?>
    <div class="form-group" class="row">
      <label class="control-label col-sm-4" class="control-label col-xs-2"for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="<?php echo $username; ?>">
      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $email; ?>">
    </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="passwordd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="confirmpassword">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm password">
      </div>
    </div>
    
    <div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  name="register" class="btn btn-info">Register</button>
        <!--xmlhttprequest function-->
        !--<p id = "rabbitmq"></p>
        <!--<script>
        function loadDoc() {
          var http = new XMLHttpRequest(); // instantiate XMLHttpRequest and stores in variable http
          xhttp.onreadyState = function() { //function to be executed when the request receives an answer.
            if (this.readyState == 4 && this.status == 200){
              document.getElementeById("rabbit").inneHTML = this.responseText;
              }
            };
            xhttp.open("GET", "https://www.njit.edu/~pba3", true);// Asynchronous since it is true
            xhttp.send("reg.php");
          }
          </script>-->
        
      </div>
  </div>
</div>
<p> Already a member? <a href="loginn.php">Sign in</a></p>
</form>
</div>
</body>
</html>