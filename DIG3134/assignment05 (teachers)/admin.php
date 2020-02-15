<?
	session_start();
	
	include 'db_connect.php';
	
	if(!$_SESSION['logged_in']) {
		print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
	} else {
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
        <title>a5p2 admin.php</title>
        <style type="text/css">@import url('css/styles.css');</style>
    </head>
    
    <body>
    	<p>Congratulations <? print $_SESSION['logged_in_user_fullname']; ?>, you have successfully logged in!</p>
        <? if($_SESSION['logged_in_user_access'] == 'reviewer') { ?> <p>Click here to insert a new story: <a href="insert.php">insert.php</a></p> <? } ?>
        <p>Click here to logout: <a href="logout.php">logout.php</a></p>
		<hr />
        <p>
            <table border="1">
                <tr>
                    <td>Game Name</td>
                    <td>Game Review</td>
                    <td>Game Rating</td>
                    <td>Game Image</td>
                    <td>Review Creation Date</td>
					<? if($_SESSION['logged_in_user_access'] == "administrator") { ?>
						<td>Delete Row</td> <?
					} ?>
                </tr>
            <?
		        while($row = $select_games_result->fetch_object()) {
                    print "<tr>";
                    print "<td>".$row->game_name."</td>"; 
                    print "<td>".$row->game_review."</td>"; 
                    print "<td>".$row->game_rating."</td>"; 
                    print "<td><img src=\"".$row->game_image_url."\" height=\"320\" width=\"223\" alt=\"image\" /></td>"; 
                    print "<td>".$row->review_date."</td>"; 
					if($_SESSION['logged_in_user_access'] == "administrator") {
						print "<td>
							   <a href=\"delete.php?review_id=".$row->review_id."\">delete</a>
							   </td>";
						}
                    print "</tr>";
                }
            ?>
            </table>
        </p>
    </body>
</html>

<? } $mysqli->close(); ?>