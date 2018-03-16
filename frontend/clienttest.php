<?php
//session_start();
?>

<script>
function sendReq(){
  var req = new XMLHttpRequest();
  req.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      document.getElementById("login").innerHTML = req.responseText;
      
      sessionStorage.setItem('req', JSON.stringify(req));// //just helps keeps track of data
          //sets the storage for req and stores request in there
          var obj = JSON.parse(sessionStorage.req);
  }
};

req.open("GET", "testRabbitMQClient.php", true);
req.send();
}
</script>

