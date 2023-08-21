<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style="background-color: cadetblue;">
<?php
$browserErr="";
$browser="";
if (isset($_POST['submit'])){ 
if (empty($_POST["browser"])) {
  $browserErr = "Please Select the required course";
} else {
  $browser = test_input($_POST["browser"]);
}}?>
<form method="post" action="inquiryform.php">
    <div class="container text-white">
        <div class="mb-3 mt-4" >
            <div class="col-6">
            <input class="form-control" list="browsers" name="browser" id="browser" placeholder="Choose Course">
            <span class="text-danger">* <?php echo $browserErr;?></span>
            <datalist id="browsers" multiple="true">
            <option value="B.Tech">
            <option value="B.Arch">
            <option value="B.Ed.">
            <option value="LLB">
            <option value="B.Sc.">
            </datalist></div></div>
    <textarea name="Inquiry Text" id="" cols="100" rows="10" placeholder="Ask your question here"></textarea>       
    </div> 
    <div class="container text-center">
    <button type="submit" name="submitqes" class="btn btn-primary">Submit

</button></div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>