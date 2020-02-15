<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Assignment03 - Part2 - Jennifer Gardner</title>
  </head>
  <body>
    <div class="cars">
      <form action="view_sorted_ids.php" method="post">
        <select name="selection">
          <option value="ford">Ford</option>
          <option value="toyota">Toyota</option>
          <option value="landrover">Landrover</option>
          <option value="algonquin">Algonquin</option>
          <option value="error">Errors</option>
        </select>
        <input type="submit" name="viewfiles" value="View File"></input>
      </form>
<?
/*IF (ford is selected) {
  open ford.txt
  display file information

} ELSE IF (repeat for others)
  open toyota.txt
  display file information */

//copy crap from process_orders for ^
//WHY DO YOU NOT WORK?!?!?!?!?!?!
//WHY DO TOU WORK!?!?
if ($_POST['selection'] == 'ford') {
  $file = "ford.txt";
  $fh = fopen($file, "r");
    if ($fh) {
      $contents = fread($fh, filesize($file));
    } else {
      print "Not Working";
    }
  fclose($fh);
  print "Ford Codes: ";
  print($contents);

} elseif ($_POST['selection'] == 'toyota') {
  $file = "toyota.txt";
  $fh = fopen($file, "r");
    if ($fh) {
      $contents = fread($fh, filesize($file));
    } else {
      print "Not Working";
    }
  fclose($fh);
  print "Toyotal Codes: ";
  print($contents);

} elseif ($_POST['selection'] == 'landrover') {
  $file = "landrover.txt";
  $fh = fopen($file, "r");
    if ($fh) {
      $contents = fread($fh, filesize($file));
    } else {
      print "Not Working";
    }
  fclose($fh);
  print "Land Rover Codes: ";
  print($contents);

} elseif ($_POST['selection'] == 'algonquin') {
  $file = "algonquin.txt";
  $fh = fopen($file, "r");
    if ($fh) {
      $contents = fread($fh, filesize($file));
    } else {
      print "Not Working";
    }
  fclose($fh);
  print "Algonquin Codes: ";
  print($contents);

} elseif ($_POST['selection'] == 'error') {
  $file = "error.txt";
  $fh = fopen($file, "r");
    if ($fh) {
      $contents = fread($fh, filesize($file));
    } else {
      print "Not Working";
    }
  fclose($fh);
  print "Error Codes: ";
  print($contents);
} 
?>
    </div>
  </body>
</html>
