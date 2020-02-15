<?
//connection for localhost
$user = "root";
$pass = "";
$db = "je947087";

$mysquli = mysqli_connect("localhost", $user, $pass, $db);
if ($mysquli->error) {
  print ("Error, no connection Message: ".$mysquli->error);
} else {
  print ("Successful connection to localhost\n \r <br/>");
  print ("Server Address: ".$_SERVER['SERVER_ADDR']." \n \r <br/>");
}
?>
