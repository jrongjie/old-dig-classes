<?php
  if(isset($_POST['first_name'])){
    setcookie("first_name", $_POST['first_name'], time()+120);
  }
  if(isset($_POST['last_name'])){
    setcookie("last_name", $_POST['last_name'], time()+120);
  }
  if(isset($_POST['phone'])){
    setcookie("phone", $_POST['phone'], time()+120);
  }
  if(isset($_POST['email'])){
    setcookie("email", $_POST['email'], time()+120);
  }
  if(isset($_POST['students'])){
    setcookie("students", $_POST['students'], time()+120);
  }
  if(isset($_POST['question1'])){
    setcookie("question1", $_POST['question1'], time()+120);
  }
  if(isset($_POST['question2'])){
    setcookie("question2", $_POST['question2'], time()+120);
  }
  if(isset($_POST['question3'])){
    setcookie("question3", $_POST['question3'], time()+120);
  }
  if(isset($_POST['question4'])){
    setcookie("question4", $_POST['question4'], time()+120);
  }
  if(isset($_POST['question5'])){
    setcookie("question5", $_POST['question5'], time()+120);
  } ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title> Assignment 2 - Jennifer Gardner</title>
  </head>
  <body>
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
  </body>
</html>
