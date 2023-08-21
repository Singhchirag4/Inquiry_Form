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

<?php
$nameErr = $emailErr ="";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?> 
<p><span class="text-danger">* required field</span></p>
<form action="forms.php" method="post">
Name: <input type="text" name="name">
<span class="text-danger">*  <?php echo $nameErr;?></span>
  <br><br></span>
E-mail: <input type="text" name="email">
<span class="text-danger">* <?php echo $emailErr;?></span><br>
<input type="submit"><br>

  <br><br>
  
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "Welcome  ";
  echo $_POST["name"]; 
  echo "<br> your email is:  ";
  echo $_POST["email"];
}?>
</body>
</html>