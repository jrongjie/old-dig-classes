<!--PREVIEW_FORM COOKIE SECTION-->
<?php
  if(isset($_POST['first'])){
    setcookie("first", $_POST['first'], time()+120);
    setcookie("last", $_POST['last'], time()+120);
    setcookie("phone", $_POST['phone'], time()+120);
    setcookie("email", $_POST['email'], time()+120);
    setcookie("students", $_POST['students'], time()+120);
    setcookie("question1", $_POST['question1'], time()+120);
    setcookie("question2", $_POST['question2'], time()+120);
    setcookie("question3", $_POST['question3'], time()+120);
    setcookie("question4", $_POST['question4'], time()+120);
    setcookie("question5", $_POST['question5'], time()+120);
  } else {  }

//start of loop/if else statement
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title> Assignment 2 - Jennifer Gardner</title>
  </head>
  <body>
    <div class="content">
  <!--data entry title-->
      <h1> Data Entry </h1>
  <!--name section-->
      <form method="post" action="form_all.php">
        <fieldset class="contact">
          <legend>Questionnaire</legend>
            <label>First Name:</label>
            <input name="first_name" type="text" value= "<? if (isset($_COOKIE['first'])) { print $_COOKIE['first']; }?>">
            <br>

            <label>Last Name:</label>
            <input name="last_name" type="text" value= "<? if (isset($_COOKIE['last'])) { print $_COOKIE['last']; }?>">
            <br>

            <label>Phone Number:</label>
            <input name="phone" type="text" value= "<? if (isset($_COOKIE['phone'])) { print $_COOKIE['phone']; }?>">
            <br>

            <label>E-mail address:</label>
            <input name="email" type="text" value= "<? if (isset($_COOKIE['email'])) { print $_COOKIE['email']; }?>">
            <br>

            <label>Students.cah.ucf.edu Address:</label>
            <input name="students" type="text" value= "<? if (isset($_COOKIE['students'])) { print $_COOKIE['students']; }?>">
            <br>

  <!--survey section-->
            <label>What is your favorite food?</label>
            <input name="question1" type="text" value= "<? if (isset($_COOKIE['question1'])) { print $_COOKIE['question1']; }?>">
            <br>

            <label>What is your favorite snack?</label>
            <input name="question2" type="text" value= "<? if (isset($_COOKIE['question2'])) { print $_COOKIE['question2']; }?>">
            <br>

            <label>What is do you enjoy ethnic food?</label>
            <input name="question3" type="text" value= "<? if (isset($_COOKIE['question3'])) { print $_COOKIE['question3']; }?>">
            <br>

            <label>What is your go-to fast food joint?</label>
            <input name="question4" type="text" value= "<? if (isset($_COOKIE['question4'])) { print $_COOKIE['question4']; }?>">
            <br>

            <label>What is your favorite meal to cook?</label>
            <input name="question5" type="text" value= "<? if (isset($_COOKIE['question5'])) { print $_COOKIE['question5']; }?>">
            <br>
      </fieldset>

  <!--PREVIEW button-->
        <input type="submit" name="preview" value="Preview"/>
      </form>
    </div>

<?
//CHECK for validation
//figure out why validation kicks out cookies
//figure out why last comes out as empty despite input
//give up on validation section, move onto making if...else
//nope
if ($_POST) { print_r($_POST);}

if (empty($_POST['last']) && (isset($_POST['preview']))) {
            ?>
<p>Last is empty!</p>
<?
            }
            else if ($_POST['preview']) {
            ?>
<p>Last is: <? print $_POST['last']; ?></p>
<?

  //IF validation goes through -> form_preview
  if (condition) {
    ?>
    <div class="content">
    <!--data entry title-->
      <h1> Data Entry </h1>
      <?php
    /*name section*/
          if (isset($_POST['first_name']) && isset($_POST['last_name'])) {
            print "First Name: ".$_POST['first_name']."\n<br>\n";
            print "Last Name: ".$_POST['last_name']."\n<br>\n";
          }
          else {
            print "Missing Name!";
          }
    /*contact section*/
          if (isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['students'])) {
            print "Phone Number: ".$_POST['phone']."\n<br>\n";
            print "Email Address: ".$_POST['email']."\n<br>\n";
            print "Students.cah.ucf.edu Address: ".$_POST['students']."\n<br>\n";
          }
          else {
            print "Missing Contact Info!";
          }
    /*survey section*/
          if (isset($_POST['question1']) && (isset($_POST['question2']))) {
            print "Favorite food: ".$_POST['question1']."\n<br>\n";
            print "Favorite snack: ".$_POST['question2']."\n<br>\n";
            print "Ethnic food that you enjoy: ".$_POST['question3']."\n<br>\n";
            print "Go-to fast food joint: ".$_POST['question4']."\n<br>\n";
            print "Favorite meal to cook: ".$_POST['question5']."\n<br>\n";
          }
          else {
            print "Missing Answers!";
          }
      ?>
  <!--PREVIEW button-->
      <button type="submit"><a href="form_entry.php">Edit</a></button>
      <button type="submit"><a href="form_confirmed.php">Finished</a></button>
    </div>
    <?
    //form_preview -> IF form is correct... confirmation
    if (condition) {
      //confirmation page
      ?>
      <div class="content">
        <p>Thank you, your data has been submitted!</p>
      </div>
      <?
    } else {
    //form _preview -> ELSE not correct ... back to entry
    }

  } else {
  //not valid so returns to entry
  }

} else {
//not valid so stays at entry
}
?>


  </body>
</html>
<!-- probably excessive
$first = "";
$last = "";
$phone = "";
$email = "";
$students = "";
$question1 = "";
$question2 = "";
$question3 = "";
$question4 = "";
$question5 = "";
-->
