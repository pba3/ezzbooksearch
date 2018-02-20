<?php
session_start();
$_SESSION['message'] = ''; 
include_once "account.php";
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
   //two passwords are equal to each other
   if($_POST['password'] == $_POST['confirmpassword']){
   
   //print_r($_FILES); die;
   $username = $mysqli->real_escape_string($_POST['username']);
   $email    = $mysqli->real_escape_string($_POST['email']);
   $password = md5($_POST['password']);//mds hash password security
   $avatar_path = $mysqli->real_escape_string('image/'.$_FILES['avatar']['name']);
   
   //make sure file type is image
   if (preg_match("!image!", $_FILES['avatar']['type'])){
   //copy image to images/ folder
   
   if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
   
   $_SESSION['username'] =$username;
   $_SESSION['avatar'] =$avatar_path;
   
   $sql ="INSERT INTO booksearch (username, email, password)"."VALUES ('$username', '$email', '$password')";
    
    //if the query is successful, redirect to welcome page
    if ($mysqli->query($sql) === true){
      $_SESSION['message'] ="Registration successful added $username to the db";
      header("location: welcome.php");
     }
     else {
       $_SESSION['message'] ="User could not be added to the database!";
       }
     }
     else {
       $_SESSION['message']="File upload failed!";
       }
     }
       else {
       $_SESSION['message']="Please only upload GIF, JPG, or PNG image!";
         }
       }
     else {
       $_SESSION['message']="Two passwords do not match!";
       
       
     }
    }
?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style1.css">
<title>Signup Page!</title>
</head>

<body background="homeBG.jpg">
<!--<div class="p-3 mb-2 bg-info text-white">PCHC</div>-->
<div class="container">
<div class="jumbotron">
<h1>Sacred Knowledge</h1>
<p>Allan Rufus</p></div>


<div class="container" class="container-fluid">
  <form id="login" class="form-horizontal" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="alert alert-error"><?= $_SESSION['message'] ?> </div>
    <div class="form-group" class="row">
      <label class="control-label col-sm-4" class="control-label col-xs-2"for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="passwordd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="confirmpasswordd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Confirm password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="avatar">Upload your image</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
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
        <button type="submit" class="btn btn-info" name="signup" value="Signup">Signup</button>
      </div>
  </div>
  </form>
  <?php echo "<h2> Your input:<h2>";
  ?>
</div>

</div>
</body>
</html>
