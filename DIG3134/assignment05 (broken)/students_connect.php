<?
//connection for students
$user = "je947087";
$pass = "FEMcdc09$#";
$db = "je947087";

$mysqli = mysqli_connect("students.cah.ucf.edu", $user, $pass, $db);
if ($mysqli->error) {
  print ("Error, no connection Message: ".$mysqli->error);
} else {
  print ("Successful connection to students server\n \r <br/>");
  print ("Server Address: ".$_SERVER['SERVER_ADDR']." \n \r <br/>");
}
?>
