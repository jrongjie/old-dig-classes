<?
	session_start();

	include("db_connect.php");
	
	if(isset($_POST['submit']) && (!$_SESSION['logged_in'])) {

		$select_query = "SELECT * FROM a5p2_users"; // query to select all users/passwords
		$select_result = $mysqli->query($select_query);
		if($mysqli->error) {
			print "Select query error!  Message: ".$mysqli->error;
		}

		while($row = $select_result->fetch_object()) {
			if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) { // check if user input = a record in the database
				$_SESSION['logged_in'] = true;
				$_SESSION['logged_in_user_id'] = $row->user_id;
				$_SESSION['logged_in_user_name'] = $row->username;
				$_SESSION['logged_in_user_fullname'] = $row->first_name.' '.$row->last_name;
				$_SESSION['logged_in_user_access'] = $row->access_level;
			} else {
				// do nothing
			}
		}
	}
	
	if (isset($_SESSION['logged_in'])) {
		header("Location: admin.php");
	}
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>a5p2 Login</title>
        <style type="text/css">@import url('css/styles.css');</style>
    </head>
    
    <body>
    	<form method="post" action="">
        	<label for="username">Username</label>
            <input name="username" id="username" type="text" /><br />
            <label for="password">Password</label>
            <input name="password" id="password" type="password" /><br />
            <input name="submit" id="submit" type="submit" value="Login" />
        </form>
        <table border="1">
        	<thead>
        		<th>Username</th>
        		<th>Password</th>
        	</thead>
			<tbody>
				<tr>
					<td>admin</td>
					<td>admin</td>
				</tr>
				<tr>
					<td>reviewer1</td>
					<td>reviewer1pw</td>
				</tr>
				<tr>
					<td>reviewer2</td>
					<td>reviewer2pw</td>
				</tr>
				<tr>
					<td>reviewer3</td>
					<td>reviewer3pw</td>
				</tr>
			</tbody>
        </table>
    </body>
</html>

<? $mysqli->close(); ?>