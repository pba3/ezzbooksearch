<?php


require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

//$request = array();
$username='username';
$type='type';
$password='password';


$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($_POST['login'])) {
 if(empty($_POST['username'])){
   echo "Username is required".PHP_EOL;
   header("refresh:3; loginn.php");
   echo "redirecting to login page";

 } echo"<br>";
  if(empty($_POST['password'])){
   echo "Password is required".PHP_EOL;
   header("refresh:3; loginn.php");
   echo "redirecting to login page";
 }header("location:index.php");//else {
   //header("location:index.php");
 //}
}
 /*if (isset($argv[1]))
{
 $msg = $argv[1];
}
else
{
 $msg = "test message";
}*/


$request = array();
$request['type'] = $type;
$request['username'] = $username;
//$request['password'] = $password;
//$request['message'] = $msg;
$response = $client->send_request($request);
//header ("location:index.php");
//$response = $client->publish($request);
$request = json_encode($response);
//var_dump($request);


//echo "Client now received response: ".PHP_EOL;
//print_r($response);
echo "\n\n";

//echo $argv[0]." FINISH".PHP_EOL;

?>
