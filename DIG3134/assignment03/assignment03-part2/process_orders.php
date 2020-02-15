<?
//open the orders file -- not needed
/*$file = "orders.txt";
$fh = fopen($file, "r");
  if ($fh) {
    $contents = fread($fh, filesize($file));
  } else {
    print "Not Working";
  }
fclose($fh);
print($contents);*/

//expode string
$file_explode = explode(",", file_get_contents("orders.txt"));
  print "<pre>";
  print_r ($file_explode);
  print "</pre>";

if ($file_explode) {
  //Ford Moto Company
  $fordvar = "/[AEIOU]{2}RE4[2-7]{3}/i";
    //sort string
    $fordcodes = preg_grep ($fordvar, $file_explode);
    print "<pre>";
      print "Ford Codes ";
      print_r($fordcodes);
    print "</pre>";
    //put relevant arrays in a a new txt file
    $ford_implode = implode("; ", $fordcodes);
    file_put_contents("ford.txt", $ford_implode);

  } if ($file_explode) {
  //Toyota Motor Sales
  $toyotavar = "/T(8[0-9]{2}|9[0-9]{2}|1[0-9]{3}|2000)-[a-zA-Z0-9]{4}/i";
    $toyotacodes = preg_grep ($toyotavar, $file_explode);
    print "<pre>";
      print "Toyotal Codes ";
      print_r($toyotacodes);
    print "</pre>";
    $toyota_implode = implode("; ", $toyotacodes);
    file_put_contents("toyota.txt", $toyota_implode);

  } if ($file_explode) {
  //Land Rover
  $landvar = "/LR(2[0-9]{2}|3[0-9]{2}|4[0-9]{2}|500)v[1-3]/i";
    $landcodes = preg_grep ($landvar, $file_explode);
    print "<pre>";
      print "Land Rover Codes ";
      print_r($landcodes);
    print "</pre>";
    $land_implode = implode("; ", $landcodes);
    file_put_contents("landrover.txt", $land_implode);

  } if ($file_explode) {
  //Algonquin Automotive Enterprises
  $algonquinvar = "/[0-9]+\*[aeiou]{3}/i";
    $algonquincodes = preg_grep ($algonquinvar, $file_explode);
    print "<pre>";
      print "Algonquin Codes ";
      print_r($algonquincodes);
    print "</pre>";
    $algonquin_implode = implode("; ", $algonquincodes);
    file_put_contents("algonquin.txt", $algonquin_implode);

//figure the crap out
//one step away from basking in success
} else {
//Errors
$errorvar = $file_explode['3, 7, 8, 12, 15, 16, 18, 21, 28, 31, 32, 33, 34'];
  $errorcodes = preg_grep($$errorvar, $file_explode);
  print "<pre>";
    print "Error Codes ";
    print_r($errorcodes);
  print "</pre>";
  file_put_contents("error.txt", $errorcodes);
}
//bask in success

//JK no success. I'm gonna be visiting your office hours for a few weeks
//Q: how do you seperate the error codes from the rest?
  //Q: use an if...else statement to process it?

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Assignment03 - Part2 - Jennifer Gardner</title>
  </head>
  <body>

  </body>
</html>
