<? session_start();
//connection
//include("students_connect.php");
include("db_connect.php");

//page accessed before login
if (!isset($_SESSION["login"])) {
  print "You Need to login to view this page. Click here to login: <a href=\"login.php\">Login</a>";

//check if user is an administrator
} else {
  if ($_SESSION["loginUser_access"] == "administrator") {
    $all_review = "SELECT r.review_id,
                    r.game_name,
                    r.game_review,
                    r.game_rating,
                    r.game_image_url,
                    r.review_creation_date
                   FROM a5_users u, a5_reviews r
                   WHERE u.user_id = r.user_id";
    $all_review_result = $mysqli->query($all_review);

//check if user is an reviewer
  } elseif ($_SESSION["loginUser_access"] == "reviewer") {
    //inputs new entries
    if (isset($_POST["submit"])) {
      $insert_review = "INSERT INTO a5_reviews(review_id, game_name, game_review, game_rating, game_image_url, user_id, review_creation_date)
                       VALUES (NULL, '".$_POST["game_name"]."', '".$_POST["game_review"]."', '".$_POST["game_rating"]."', '".$_POST["game_image_url"]."', '".$_SESSION["loginUser_id"]."', CURRENT_TIMESTAMP) ";
      $mysqli->query($insert_review);
    }

    $user_review = "SELECT r.game_name,
                    r.game_review,
                    r.game_rating,
                    r.game_image_url,
                    r.review_creation_date
                   FROM a5_users u, a5_reviews r
                   WHERE u.user_id = r.user_id AND u.user_id = '".$_SESSION['loginUser_id']."'";
    $user_review_result = $mysqli->query($user_review);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title><?print $$_SERVER["PHP_SELF"]?></title>
  </head>
  <body>
    <h1>Welcome back <?print $_SESSION["loginUser"];?>!</h1>
    <p>You have successfully logged in.</p>
    <p><a href="logout.php">Click here to logout</a></p>
    <table>
      <thead>
        <th>Game Name</th>
        <th>Game Review</th>
        <th>Game Rating</th>
        <th>Game Image</th>
        <th>Review Creation Date</th>
  <? if ($_SESSION["loginUser_access"] == "administrator") { ?>
        <th>Delete Row</th>
      </thead>
    <tbody>
      <?
        if (isset($_SESSION["login"])){
          while ($row = $all_review_result->fetch_object()) {
            print "<tr>";
            print "<td>".$row->game_name."</td>";
            print "<td>".$row->game_review."</td>";
            print "<td>".$row->game_rating."</td>";
            print "<td>".$row->game_image_url."</td>"; //  <img href=\"".$row->game_image_url."\"/>
            print "<td>".date("M d, Y g:ia", strtotime($row->review_creation_date))."</td>";
            print "<td><a href=\"delete.php?review_id =".$row->review_id."\">Delete</a></td>";
            print "</tr>";
          } //while loop
        } //if login
      } else if ($_SESSION["loginUser_access"] == "reviewer") {
          if (isset($_SESSION["login"])){
            while ($row = $user_review_result->fetch_object()) {
              print "<tr>";
              print "<td>".$row->game_name."</td>";
              print "<td>".$row->game_review."</td>";
              print "<td>".$row->game_rating."</td>";
              print "<td><img href=\"".$row->game_image_url."\"/></td>";
              print "<td>".date("M d, Y", strtotime($row->review_creation_date))."</td>";
              print "</tr>";
            } //while loop
          } //if login
        } //elseif reviewer
      ?>
    </tbody>
  </table>
    <?if ($_SESSION["loginUser_access"] == "reviewer") {?>
    <!--Write New Review-->
      <form action="" method="POST">
        <fieldset>
          <legend>New Game Review</legend>
          <label>Game Name</label><br>
          <input name="game_name" type="text" value="" required>
          <br>
          <label>Game Review</label><br>
          <textarea name="game_review" rows="6" cols="60"></textarea>
          <br>
          <label>Game Rating</label><br>
          <input name="game_rating" type="number" min="1" max="10" value="">
          <br>
          <label>Game Image URL</label><br>
          <input name="game_image_url" type="url" value="">
          <br>

          <input type="submit" name="submit" value="Submit Review">
        </fieldset>
      </form>
    <? } // if reviewer ?>
  </body>
</html>

<? } //page accessed before login - end of statement
$mysqli->close(); ?>
