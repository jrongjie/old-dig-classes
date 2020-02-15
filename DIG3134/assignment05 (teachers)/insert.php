<?
	session_start();
	
	include 'db_connect.php';

	if((!$_SESSION['logged_in']) || ($_SESSION['logged_in_user_access'] != 'reviewer')) {
		print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
	} else {

		if(isset($_POST['submit'])) {
			if(empty($_POST['game_name']) || empty($_POST['game_review']) || empty($_POST['game_rating']) || empty($_POST['game_image_url'])) {
				print "<span class='error'>Some fields missing!</span>";
			} else {
				$insert_review_query = "INSERT INTO a5p2_reviews(game_name, game_review, game_rating, game_image_url, review_creation_date, user_id)
										VALUES ('".$_POST['game_name']."', '".$_POST['game_review']."', '".$_POST['game_rating']."', '".$_POST['game_image_url']."', CURRENT_TIMESTAMP, '".
										$_SESSION['logged_in_user_id']."')";
				$mysqli->query($insert_review_query);
			}
		}
		
		if ($_SESSION['logged_in_user_access'] == "administrator") {
		
			$select_games_query = "SELECT r.review_id, r.game_name, r.game_review, r.game_rating, r.game_image_url, DATE_FORMAT(r.review_creation_date, '%b %e') AS review_date
										 FROM a5p2_reviews r, a5p2_users u
										 WHERE r.user_id = u.user_id";
			$select_games_result = $mysqli->query($select_games_query);
		} else if ($_SESSION['logged_in_user_access'] == "reviewer") {
			$select_games_query = "SELECT r.review_id, r.game_name, r.game_review, r.game_rating, r.game_image_url, DATE_FORMAT(r.review_creation_date, '%b %e') AS review_date
										 FROM a5p2_reviews r, a5p2_users u
										 WHERE r.user_id = u.user_id AND u.user_id = ".$_SESSION['logged_in_user_id']."";
			$select_games_result = $mysqli->query($select_games_query);
		}
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>a5p2 - insert</title>
        <style type="text/css">@import url('css/styles.css');</style>
    </head>
    
    <body>
    	<p>Congratulations <? print $_SESSION['logged_in_user_fullname']; ?>, you have successfully logged in!</p>
        <p>Click here to get back to admin.php: <a href="admin.php">admin.php</a></p>
		<hr />
        <p>
            <table border="1">
                <tr>
                    <td>Game Name</td>
                    <td>Game Review</td>
                    <td>Game Rating</td>
                    <td>Game Image</td>
                    <td>Review Creation Date</td>
                </tr>
            <?
		        while($row = $select_games_result->fetch_object()) {
                    print "<tr>";
                    print "<td>".$row->game_name."</td>"; 
                    print "<td>".$row->game_review."</td>"; 
                    print "<td>".$row->game_rating."</td>"; 
                    print "<td><img src=\"".$row->game_image_url."\" alt=\"image\" /></td>"; 
                    print "<td>".$row->review_date."</td>"; 
                    print "</tr>";
                }
            ?>
            </table>
        </p>
		<br />
    	<form method="post" action="">
        	<label for="game_name">Game Name</label>
            <input name="game_name" id="game_name" type="text" /><br />
            <label for="game_review">Game Review</label>
            <input name="game_review" id="game_review" type="text" /><br />
        	<label for="game_rating">Game Rating</label>
            <input name="game_rating" id="game_rating" type="text" /><br />
            <label for="game_image_url">Game Image URL</label>
            <input name="game_image_url" id="game_image_url" type="text" /><br />
            <input name="submit" id="submit" type="submit" value="Submit Review" />
        </form>
    </body>
</html>

<? } $mysqli->close(); ?>