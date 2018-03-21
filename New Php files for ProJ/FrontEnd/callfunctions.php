<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

include("err.php");
require_once('rabbitmqphp_example/path.inc');
require_once('rabbitmqphp_example/get_host_info.inc');
require_once('rabbitmqphp_example/rabbitMQLib.inc');
//include('rabbitmqphp_example/testRabbitMQClient.php');

//if user not logged in, they can't have access
if (empty($_SESSION['username'])){
    echo "you must log In";
}

// send req to RMQ
function LoGinUser($username, $password){
    $request = array();

    $request['type']     = 'login';
    $request['username'] = $username;
    $request['password'] = $password;

    $reply  = DataB($request); //calling function from testRabbitMQClient.php 

    if($reply == 1){
        $_SESIION['username'] = $username;
        if(!empty($_GET['usernmae'])){
           echo $_REQUEST['username'];
       } else { 
           echo "SOmething not right";
    }
    return $reply;

}
}

 //sending request to RMQ
    /*function Reg($username, $email, $password){
        $request = array();

        $request['type']     =$Register;
        $request['username'] =$username;
        $request['email']    =$email;
        $request['password'] =$password;

        $reply = DataB($request);
        return $reply;
    }
*/
?>
