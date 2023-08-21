<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "red";
$_SESSION["favanimal"] = "horse";
echo "Session variables are set.";
?>

</body>
</html>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<h4> Your Input</h4>";
  echo "<br> Welcome ";
  echo $_POST["name"]; 
  echo "<br> your email is:  ";
  echo $_POST["email"];
  echo "<br>Contact Number: ";
  echo $_POST["contactnumber"];
  echo "<br>Gender:";
  echo $_POST["gender"];
  echo "<br>Course: ";
  echo $_POST["browser"];
}?>
    
<div class="form-check mb-3">