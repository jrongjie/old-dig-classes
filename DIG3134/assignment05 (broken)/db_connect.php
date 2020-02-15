<?
//connection for localhost
$user = "root";
$pass = "";
$db = "je947087";

$mysqli = mysqli_connect("localhost", $user, $pass, $db);
if ($mysqli->error) {
  print ("Error, no connection Message: ".$mysqli->error);
} else {
  print ("Successful connection to localhost\n \r <br/>");
  print ("Server Address: ".$_SERVER['SERVER_ADDR']." \n \r <br/>");
}
?>
