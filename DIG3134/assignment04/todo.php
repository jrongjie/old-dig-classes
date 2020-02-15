<?
//connection
include("students_connect.php");

//get values from db
$query = "SELECT * FROM a4_todo";
$result = $mysquli->query($query);
if ($mysquli->error) {
  print "Query failed: ".$mysquli->error;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Jennifer Gardner - Assignment 4</title>
  </head>
  <body>
    <h1>Things Todo</h1>
    <table border="2">
      <thead>
        <tr class="topRow">
          <th>Todo Item ID</th>
          <th>Todo Item Creation Date</th>
          <th>Todo Item Author</th>
          <th>Todo Item</th>
          <th>Todo Item Person Accountable</th>
          <th>Todo Item Start Date</th>
          <th>Todo Item Due Date</th>
          <th>Todo Item Completed Date</th>
        </tr>
      </thead>
      <tbody>
<?
// display table data
while ($row = $result-> fetch_array(MYSQLI_ASSOC)) {
  print "\t\t <tr> \n";
  print "\t\t\t <td>".$row["todo_item_id"]."</td> \n";

  //Correct time format
  print "\t\t\t <td>".date("m/d/y", strtotime($row["todo_item_creation_date"]))."</td> \n";

  print "\t\t\t <td>".$row["todo_item_author"]."</td> \n";
  print "\t\t\t <td>".$row["todo_item"]."</td> \n";

  //null items DO NOT DELETE
/* print "\t\t\t <td>".$row["todo_item_person_accountable"]."</td> \n";
  print "\t\t\t <td>".date("m/d/y", strtotime($row["todo_item_start_date"]))."</td> \n";
  print "\t\t\t <td>".date("m/d/y", strtotime($row["todo_item_due_date"]))."</td> \n";
  print "\t\t\t <td>".date("m/d/y", strtotime($row["todo_item_completed_date"]))."</td> \n";
  print "\t\t </tr> \n"; */

  //replace nulls with n/a
  /* SELECT if(field IS NULL, "N\/A", field)as field FROM table;
  if ($mysquli == NULL || $mysquli > 0 || $mysquli == "") --> object of class mysqli could not be converted to int*/

  //PROGRESS: script prints, not in columns, need to figure out conversion
  /*if (mysqli_affected_rows($mysquli) > 0) {
    print "N/A";
  }*/

  //useless
  //mysqli_query($mysquli, "SELECT * FROM a4_todo WHERE todo_item_start_date IS NULL");

  //CAN'T USE. CHECKS FOR SOME VALUE OUT OF ENTIRE TABLE
  /*  if (mysqli_affected_rows($mysquli) !== NULL) {
      print "\t\t\t <td> N/A </td> \n";
      print "\t\t\t <td> N/A </td> \n";
      print "\t\t\t <td> N/A </td> \n";
      print "\t\t\t <td> N/A </td> \n";
    } */
    $nullValues = "SELECT * FROM a4_todo WHERE field IS NULL";
    if ($nullValues) {
      print "\t\t\t <td> N/A </td> \n";
      print "\t\t\t <td> N/A </td> \n";
      print "\t\t\t <td> N/A </td> \n";
      print "\t\t\t <td> N/A </td> \n";
    }
}
?>
      </tbody>
    </table>
  </body>
</html>

<? $mysquli->close(); ?>
