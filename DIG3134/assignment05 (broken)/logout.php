<?
//connection
//include("students_connect.php");
include("db_connect.php");

session_start();
//ends session
if (isset($_SESSION["login"])) {
  unset($_SESSION["login"]);
}
//logs out user if theyre logged in when visiting page
if (isset($_SESSION["loginUser"])) {
  unset($_SESSION["loginUser"]);
}

header("Location: login.php");
?>
