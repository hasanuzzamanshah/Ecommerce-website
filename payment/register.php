<?php 

include 'register.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>




<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Billing Address</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>

 <header class="bg-dark" style="height: 60px; padding: 5px;">
  <h3 class="text-light" style="text-align: center;">Billing Address</h3>
  
 </header>
 <div class="container bg-dark">
 <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-2"></div>  
  <div class="col-sm-6 bg-light boxStyle">
   <form name="theform" action="" method="post">
   
   <div class="form-group">
    <div class="width30 floatL"><label>Firstname</label></div>
    <div class="width70 floatR"><input type="text" id="txtfname" name="txtfname" placeholder="First Name" class="form-control"></div><br><br>
   </div>
   
   <div class="form-group">
    <div class="width30 floatL"><label>Lastname</label></div>
    <div class="width70 floatR"><input type="text" id="txtlname" name="txtlname" placeholder="Last Name" class="form-control"></div>
	
   </div><br>
   
   <div class="form-group">
    <div class="width30 floatL"><label>Address</label></div>
    <div class="width70 floatR"><input type="text" id="txtaddress" name="txtaddress" placeholder="Ship to Address" class="form-control"></div>
	
   </div><br>
   
   <div class="form-group">
    <div class="width30 floatL"><label>City</label></div>
    <div class="width70 floatR"><input type="text" id="txtcity" name="txtcity" placeholder="Ship to City" class="form-control"></div>
   </div><br>




   <img src="images/01770388088 - 2_40_08 PM, Dec 11, 2021.png"  style="width:200px;height:300px;margin-left: 250px;margin-top: 20px;">

   <div style="margin-top: 50px;"class="form-group">
    <div class="width30 floatL"><label>Submit Transaction id</label></div>
    <div class="width70 floatR"><input type="text" id="txtaddress" name="txtaddress" placeholder="Ship to Address" class="form-control"></div>
	
   </div><br>
   </div><br>

   </div><br> 


   <div class="form-group">
   <div class="row">
   <div class="floatR"><br/><input class="btn btn-success" type="submit"   value="Submit" style="font-weight: bold"></div> 
   </div>
   </div>
   </form>      
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-2"></div>
  </div> 
 </div> 
<style>
.width30 {
  width: 30%;
 }
 .width70 {
  width: 70%; 
 }
 .floatL{
  float: left;
 }
 .floatR{
  float: right;
 }
 .boxStyle{
  padding: 20px; 
  border-radius: 25px; 
  border-top: 6px solid #red;
  border-bottom: 6px solid #RED;
 }
</style>
</body>
</html>
















