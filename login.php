<?php 
session_start();
$_SESSION['message'] = ''; 
include "account.php";
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   //two passwords are equal to each other
   if($_POST['password'] == $_POST['confirmpassword']){
   $username = $mysql->real_escape_strings($_POST['username']);
   $email = $mysql->real_escape_strings($_POST['email']);
   $password = md5($_POST['password']);//mds hash password security
   
   $_SESSION['username'] =$username;
   
   $sql ="INSERT INTO BookSearch (username, email, password)"."VALUES ('$username', '$email', '$password')";
    //if the query is successful, redirect to welcome page
    if ($mysql->query($sql) === true){
    $_SESSION['message'] ="Registration successful added $username to the db";
    header("location: welcome.php");
     }
     else {
       $_SESSION['message'] ="User could not be added to the database!";
       }
     else {
       $_SESSION['message']="Two passwords do not match!";
       }
   }
 }


//INPUT
//This is when the signup button is clicked

?>


<!DOCTYPE html>

<head>
<meta charset="utf-8">

<title>Online Book Searcher!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<a href="style1.css" rel="stylesheet" type="text/css">
</head>
<!--<script>


<body background="homeBG.jpg">

<!--<div class="p-3 mb-2 bg-info text-white">PCHC</div>-->
<div class="container">
<div class="jumbotron">
<h1>Nourish The Brain</h1>
<p>Readers never quit reading</p></div>


<div class="container">
  
  <form id="username" class="form-horizontal" action="./login.php" method='post'>
    <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
    <div class="form-group" class="row">
      <label class="control-label col-sm-4 col-xs-2"for="username">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" value="submit" ame="submit" class="btn btn-success">Submit</button>
      </div>
     
    <!--<button type="button" class="btn btn-basic"><a href="register.php">New User</a></button>-->
    <button type="btn" class="btn btn-default"><a href="register.php">New User?</button>
  </div>
    </div>
  </form>
</div>

</div>
</body>
</html>

