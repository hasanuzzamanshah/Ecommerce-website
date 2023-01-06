<?php

include 'conn.php';

if(isset($_POST['submit'])){

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $city = $_POST['city'];
 $trxid = $_POST['trxid'];
 $q = " INSERT INTO `info`(`fname`, `lname`,`address`,`email`,`city`,`trxid`) 
        VALUES ( '$fname', '$lname','$address','$email','$city','$trxid' )";

 $query = mysqli_query($con,$q);
 header('location:../degital-markiting.html');
}
?>