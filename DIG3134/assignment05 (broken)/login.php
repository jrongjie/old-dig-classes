<?
session_start();
//connection
include("db_connect.php");

if(isset($_POST["submit"]) && (!isset($_SESSION["login"]))) {
  $query = "SELECT username,
            password FROM a5_users"; //username, password
  $result = $mysqli->query($query);
  //checks connection
  if ($mysqli -> error) {
    print "Query failed: ".$mysqli->errors;
  }
  //starts session for login and user
  while($row = $result->fetch_object()) {
    if ((($_POST["username"]) == ($row->username)) && (md5($_POST["password"]) == ($row->password))) {
      $_SESSION["login"] = true;
      $_SESSION["loginUser"] = $row->username;
      $_SESSION["loginUser_id"] = $row->user_id;
      $_SESSION["loginUser_access"] = $row->access_level;
    }
  }
}
//redirects confirmed login to next page
if (isset($_SESSION["login"])) {
  header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jennifer Gardner - Assignment05</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="login">
      <form action="" method="post">
        <br>
        <label>Username</label>
        <input type="text" name="username" value="">
        <label>Password</label>
        <input type="text" name="password" value="">

        <input type="submit" name="submit" value="Login">
      </form>
    </div>
  </body>
</html>

<? $mysqli->close(); ?>
