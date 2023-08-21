<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php include 'navbar.php' ;?>
  <!-- table -->
  <div class="container mt-3 p-3 bg-secondary text-white ">
<h3> Date and Time</h3>
<?php date_default_timezone_set("asia/kolkata");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br>The time is " . date("h:i:sa")

?>
 <br>company
  &copy; 2001-<?php echo date("Y");?>
  <br>
  <?php
  $d=strtotime("9:45am April 15 2014");
  echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>  <br>
<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?><br><H3> next 6 saturday </h3>
<?php
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
<b>The example below outputs the number of days until 4th of october:</b>
<?php
$d1=strtotime("october 04");
$d2=ceil(($d1-time())/60/60/24);
echo "<br>There are " . $d2 ." days until 4th of october.";
?>
<?php
//Calculate the sunrise time for Lisbon, Portugal
//Latitude: 38.4 North
//Longitude: 9 West
//Zenith ~= 90
//offset: +1 GMT

echo("<h2>India, Indore</h2>");
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,22.7196, 75.8577,90,+5));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,22.7196, 75.8577,90,+5));
?>
<form action="file.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="uploadfile"/>
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name])) {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
} else {
  echo "Cookie named '" . $cookie_name . "' is not set!";
  
}
?>

</body>
</html>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 2) {
  echo "Cookies are enabled.<br>";
} else {
  echo "Cookies are disabled.<br>";
}
print_r($_SESSION);
?>

</body>
</html>

  </div>
</body>
</html>