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
  <!--name section-->
      <form method="post" action="form_preview.php">
        <fieldset class="contact">
          <legend>Personal Information</legend>
            <label>First Name:</label>
            <input name="first_name" type="text" value= "<? if (isset($_COOKIE['first_name'])) { print $_COOKIE['first_name']; }?>">
            <br>

            <label>Last Name:</label>
            <input name="last_name" type="text" value= "<? if (isset($_COOKIE['first_name'])) { print $_COOKIE['last_name']; }?>">
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
        </fieldset>

  <!--survey section-->
        <fieldset class="questions">
            <legend>Questionnaire</legend>
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
        <button type="submit" name="submit" value="submit">Preview Answers</button>
      </form>
    </div>
  </body>
</html>
