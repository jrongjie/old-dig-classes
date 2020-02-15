<?
	session_start();
	
	include 'db_connect.php';

	if(!$_SESSION['logged_in']) {
		print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
	} else if ($_SESSION['logged_in_user_access'] == "administrator") {
	
		if(isset($_POST['submit'])) {
			$delete_review_query =  "DELETE FROM a5p2_reviews
									 WHERE review_id='".$_POST['review_to_delete']."'";
			$mysqli->query($delete_review_query);
			header('Location: admin.php');
		}

		$select_games_query = "SELECT r.game_name, r.game_review, r.game_rating, r.game_image_url, DATE_FORMAT(r.review_creation_date, '%b %e') AS review_date
									 FROM a5p2_reviews r, a5p2_users u
									 WHERE r.user_id = u.user_id";
		$select_games_result = $mysqli->query($select_games_query);
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>a5p2 - delete.php</title>
        <style type="text/css">@import url('css/styles.css');</style>
	</head>
    
    <body>
    	<p>Congratulations <? print $_SESSION['logged_in_user_fullname']; ?>, you have successfully logged in!</p>
        <p>Click here to get back to admin.php: <a href="admin.php">admin.php</a></p>
		<hr />
    	<form method="post" action="">
            <p>Do you really want to delete review_id <? print $_GET['review_id']; ?>?</p>
            <input name="review_to_delete" id="review_to_delete" type="hidden" value="<? print $_GET['review_id']; ?>" /><br />
            <input name="submit" id="submit" type="submit" value="Delete Review" />
        </form>
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
    </body>
</html>

<? } else { ?> 
	<p>Please login as an admin: <a href="login.php">login.php</a></p>
<? } $mysqli->close(); ?>