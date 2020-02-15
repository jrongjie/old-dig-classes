<?
	session_start();

	if(isset($_SESSION['logged_in'])) {
		unset($_SESSION['logged_in']);
	}
	
	if(isset($_SESSION['logged_in_username'])) {
		unset($_SESSION['logged_in_username']);
	}
	
	if(isset($_SESSION['logged_in_user_fullname'])) {
		unset($_SESSION['logged_in_user_fullname']);
	}

	if(isset($_SESSION['logged_in_user_access'])) {
		unset($_SESSION['logged_in_user_access']);
	}
	
	if(isset($_SESSION['logged_in_user_id'])) {
		unset($_SESSION['logged_in_user_id']);
	}
	
	header("Location: login.php");
?>