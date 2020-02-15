<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>ASSIGNMENT 03 - Part 1 - Jennifer Gardner</title>
        <style type="text/css">@import url('css/styles.css');</style>
    </head>

    <body>
    	<div id="content-container">
        	<div id="content">
                <form method="post" action="form_preview.php">
                	<fieldset>
                    	<legend>Data Entry!</legend>
                        <ul>
                            <li>
                                <input type="text" name="first_name" id="first_name" value="<? if(isset($_COOKIE['first_name'])) { print $_COOKIE['first_name']; } ?>" />
                                <label for="first_name">First Name</label>
                            </li>
                            <li>
                                <input type="text" name="last_name" id="last_name" value="<? if(isset($_COOKIE['last_name'])) { print $_COOKIE['last_name']; } ?>" />
                                <label for="last_name">Last Name</label>
                            </li>
                            <li>
                                <input type="text" name="email" id="email" value="<? if(isset($_COOKIE['email'])) { print $_COOKIE['email']; } ?>" />
                                <label for="email">E-mail</label>
                            </li>
                            <li>
                                <input type="text" name="phone" id="phone" value="<? if(isset($_COOKIE['phone'])) { print $_COOKIE['phone']; } ?>" />
                                <label for="phone">Phone Number</label>
                            </li>
                            <li>
                                <input type="text" name="sulley" id="sulley" value="<? if(isset($_COOKIE['sulley'])) { print $_COOKIE['sulley']; } ?>" />
                                <label for="sulley">Sulley Address</label>
                            </li>
                            <li>
                                <input type="text" name="q1" id="q1" value="<? if(isset($_COOKIE['q1'])) { print $_COOKIE['q1']; } ?>" />
                                <label for="q1">What is your favorite color?</label>
                            </li>
                            <li>
                                <input type="text" name="q2" id="q2" value="<? if(isset($_COOKIE['q2'])) { print $_COOKIE['q2']; } ?>" />
                                <label for="q2">What was the last movie you saw?</label>
                            </li>
                            <li>
                                <input type="text" name="q3" id="q3" value="<? if(isset($_COOKIE['q3'])) { print $_COOKIE['q3']; } ?>" />
                                <label for="q3">How often to you purchase software?</label>
                            </li>
                            <li>
                                <input type="text" name="q4" id="q4" value="<? if(isset($_COOKIE['q4'])) { print $_COOKIE['q4']; } ?>" />
                                <label for="q4">What is your favorite DM class so far?</label>
                            </li>
                            <li>
                                <input type="text" name="q5" id="q5" value="<? if(isset($_COOKIE['q5'])) { print $_COOKIE['q5']; } ?>" />
                                <label for="q5">Would you like to play a game?</label>
                            </li>
                            <li>
                                <input type="submit" name="submit" id="submit" value="Preview Answers" />
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>
       	</div>
        <?
        if (empty($_POST['first_name'])) {
        <p> Missing First Name </p>;
        } else {
          print $_POST['first_name'];
          }
        ?>
    </body>
</html>
