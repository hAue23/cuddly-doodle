<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = new mysqli($host,$user,$pass,$db);
if (!$con){
    echo "There are some problem with connecting the database";
}
//there are no errors so lets get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
//now we have collected the form data in variables
//lets insert them to table
$qry = "INSERT INTO `table1`(`name`, `email`, `phone`, `msg`) VALUES ('$name','$email',$phone,'$msg')";//no ''quotes to phone because it holds an integer
$insert = mysqli_query($con,$qry);
if (!$insert){
    echo "There are some problem while inserting data";
}
else {
    echo "Data Inserted";
}
?>