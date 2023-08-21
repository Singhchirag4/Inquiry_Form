<?php
session_start();?>

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

  <!-- php coding for form -->
<?php
 // define variables and set to empty values
                          
// $nameErr = $emailErr = $genderErr = $contactnumberErr = $browserErr = "";
// $name = $email = $gender = $contactnumber = $browser = "";
// if (isset($_POST['submit'])){ 
//  if(empty($_POST["name"])){
//   $nameErr= "Name is required";

//  }else {
//   $name = test_input($_POST["name"]);
//    // check if name only contains letters and whitespace
//    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//     $nameErr = "Only letters and white space allowed";
//   }
//  }
//  if (empty($_POST["email"])) {
//   $emailErr = "Email is required";
// } else {
//   $email = test_input($_POST["email"]);
//    // check if e-mail address is well-formed
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $emailErr = "Invalid email format";
//   }
// }


// }

// function test_input($data){
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
// SQL database

$servername = "localhost";
$username = "root";
$password = "";
$database= "mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";
  // //sql to create table
  // $sql = "INSERT INTO MyGuests (firstname, email)
  // VALUES ( '$name', '$email')";
  
  // if (mysqli_query($conn, $sql)) {
  //   echo "New record created successfully";
  // } else {
  //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }
  // get last insertes id
 /*
  if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "<br>New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  // select data
  $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}*/
// delete data
// $sql = "DELETE FROM MyGuests WHERE id=1";
// if(mysqli_query($conn, $sql)){
//   echo "deleted successfully";
// } else {
//   echo "error" . mysqli_error($conn);
// }
  
  mysqli_close($conn);
  ?>





    
</body>
</html>