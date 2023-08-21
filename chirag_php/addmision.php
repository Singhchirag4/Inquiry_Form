<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
  <?php
  include "navbar.php";?>
  
 <!-- php coding for form -->
<?php
 // define variables and set to empty values
                          
$fnameErr = $lnameErr= $emailErr = $genderErr = $contactnumberErr = $clasErr = $bdayErr = "";
$fname = $lname = $email = $gender = $contactnumber = $clas = $bday= "";
if (isset($_POST['submit'])){ 
 if(empty($_POST["fname"])){
  $nameErr= "Name is required";

 }else {
  $fname = test_input($_POST["fname"]);
   // check if name only contains letters and whitespace
   if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
    $fnameErr = "Only letters and white space allowed";
  }
 }
 // Last name
 if(empty($_POST["lname"])){
  $lnameErr= "Last Name is required";

 }else {
  $lname = test_input($_POST["lname"]);
   // check if name only contains letters and whitespace
   if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
    $lnameErr = "Only letters and white space allowed";
  }
 }
 if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
   // check if e-mail address is well-formed
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
}

if (empty($_POST["contactnumber"])) {
  $contactnumberErr = "Please provide your contact number";
} else {
  $contactnumber = test_input($_POST["contactnumber"]);

}

if (empty($_POST["bday"])) {
  $bdayErr = "Please Select your birthday";
} else {
  $browser = test_input($_POST["bday"]);
}

if (empty($_POST["gender"])) {
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}
}
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 
<!-- form -->
<div class="container-fluid" style="background-color: cadetblue;">
<div class="h3">Registration Form</div>

<form method="post" action="addmision.php">
<div class="row">
<div class="col-md-6 mt-md-0 mt-3">
<label><b>First Name</b></label>
<input type="text" class="form-control" id="fname" required>
<span class="text-danger">* <?php echo $fnameErr;?></span>

</div>
<div class="col-md-6 mt-md-0 mt-3">
<label><b>Last Name</b></label>
<input type="text" class="form-control" id="lname" required>
<span class="text-danger">* <?php echo $lnameErr;?></span>
</div>
</div>
<div class="row">
<div class="col-md-6 mt-md-0 mt-3">
<b>Birth Date:</b> <br>
<input type="text" id="bday">
<span class="text-danger"> *<?php echo $bdayErr;?></span><br>
    
</div>
<div class="col-md-6 mt-md-0 mt-3">
<b>Gender:</b><br>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="Female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="Male">Male
<span class="text-danger"> *<?php echo $genderErr;?></span><br>

</div>

</div>
<div class="row">
<div class="col-md-6 mt-md-0 mt-3">
<label><b>Email</b></label>
<input type="email" class="form-control" id="email" required>
<span class="text-danger"> *<?php echo $emailErr;?></span><br>
</div>
<div class="col-md-6 mt-md-0 mt-3">
<label><b>Phone Number</b></label>
<input type="tel" class="form-control" id="contactnumber" required>
<span class="text-danger"> *<?php echo $contactnumberErr;?></span><br>
</div>
</div>
<div class=" my-md-2 my-3">
<label>Subject</label>
<select id="clas" required>
<option value="" selected hidden>Select class</option>
<option >1</option>
<option >2</option>
<option >3</option>
<option >4</option>
<option >5</option>
<option >6</option>
<option >7</option>
<option >8</option>
<option >9</option>
<option >10</option>
<option >11</option>
<option >12</option>



</select>
</div>


<?php
include "file.php";?>

</div>
<div class="container text-center">
<button type="submit" name="submit" class="btn btn-primary">Submit

</button>
</form></div></div>

<?php if($_SERVER['REQUEST_METHOD']=='POST'){
  echo "<h4> Your Input</h4>";
  echo "<br> Welcome ";
  echo $fname;
  echo $lname;
  echo "<br> your email is:  ";
  echo $email;
  echo "<br>Contact Number: ";
  echo $contactnumber;
  echo "<br>Gender:";
  echo $gender;
  echo "<br>Birth Day: ";
  echo $bday;
  echo "<br> You have selected" . $clas . "standard for admission" ;
}?>
 







<script>
  $(document).ready(function() {

    $( "#bday" ).datepicker({
        changeMonth: true,
      changeYear: true
    });
  } );

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>