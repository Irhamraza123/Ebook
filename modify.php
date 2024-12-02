<?php
session_start();




$cust_id= $_POST["cust_id"];
$cust_fname = $_POST["cname"];
$cust_phone = $_POST["phone"];
$cust_email = $_POST["email"];
$custname = $_POST["cust"];
$cust_password=$_POST["password"];
$cust_address = $_POST["address"];
$cust_city = $_POST["city"];


include "includes/config.php";


echo $query2 = "UPDATE `customer` SET `Name`='{$cust_fname}',`Phone`='{$cust_phone}',`Email`='{$cust_email}',`Username`='{$custname}',`Password`='{$cust_password}',`Address`='{$cust_address}',`City`='{$cust_city}' WHERE `C.Id`='{$cust_id}'";


mysqli_query($conn,$query2);


header("location:http://localhost/book/customer.php");




?>