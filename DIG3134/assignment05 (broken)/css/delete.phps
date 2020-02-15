<? session_start();
//connection
include("students_connect.php");
//include("db_connect.php");

if (!$_SESSION["login"]) {
  print "You need to login as an administrator to view this page. Click here to login: <a href=\"login.php\">Login<?a>";
} else if ($_SESSION["loginUser_access"] == "administrator"){

  if (isset($_POST["yes"])) { //admin decides to delete review
    $delete_review = "DELETE FROM a5_reviews
                      WHERE review_id =' ".$_POST["review_to_delete"]." ' ";
    $mysqli->query($delete_review); //deletes from db
    header("Location: admin.php"); //relocates user

  } elseif (isset($_POST["no"])) { //admin decides not to delete
    header("Location: admin.php"); //relocates user
  }
  $select_review = "SELECT r.review_id,
                  r.game_name,
                  r.game_review,
                  r.game_rating,
                  r.game_image_url,
                  r.review_creation_date,
                  u.username,
                  u.access_level
                 FROM a5_users u, a5_reviews r
                 WHERE u.user_id = r.user_id "; //AND r.review_id == $row->review_id
  $select_review_result = $mysqli->query($select_review);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?print $_SESSION["PHP_SELF"];?></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1><?print $_SESSION["loginUser"];?>, you are successfully logged in!</h1>
    <table>
      <thead>
        <th>Review Number</th>
        <th>Game Name</th>
        <th>Game Review</th>
        <th>Game Rating</th>
        <th>Game Image</th>
        <th>Review Creation Date</th>
        <th>Username</th>
        <th>Access Level</th>
      </thead>
      <tbody>
        <?
        while ($row = $select_review_result->fetch_object()) {
          print "<tr>";
          print "<td>".$row->review_id."</td>";
          print "<td>".$row->game_name."</td>";
          print "<td>".$row->game_review."</td>";
          print "<td>".$row->game_rating."</td>";
          print "<td><img href=\"".$row->game_image_url."\"/></td>";
          print "<td>".date("M d, Y g:ia", strtotime($row->review_creation_date))."</td>";
          // DateTime::createFromFormat("M d, Y H:ia", $row->review_creation_date) -- doesn't work
          //date("M d, Y g:ia", strtotime($row->review_creation_date)) -- doesn't work
          //DATE_FORMAT($row->review_creation_date, "%m %e, %Y %l:%i%p")) -- works incorrectly, time captured incorrectly
          print "<td>".$row->username."</td>";
          print "<td>".$row->access_level."</td>";
          print "</tr>";
        }
        ?>
      </tbody>
    </table>
    <form action="" method="got">
      <p>Do you really want to delete review <? print $_GET["review_id"]; ?>?</p>
      <input type="hidden" name="review_to_delete" value="<? print $_GET["review_id"]; ?>">
      <input type="submit" name="yes" value="Yes">
      <input type="submit" name="no" value="No">
    </form>
  </body>
</html>

<? }
$mysqli -> close();?>
