<?php
session_start();




$user_id= $_POST["user_id"];
$user_fname = $_POST["fname"];
$user_phone = $_POST["phone"];
$user_email = $_POST["email"];
$username = $_POST["user"];
$user_password=$_POST["password"];
$user_address = $_POST["address"];
$user_city = $_POST["city"];
$user_role = $_POST["role"];


include "includes/config.php";


echo $query = "UPDATE `users` SET `Name`='{$user_fname}',`Phone`='{$user_phone}',`Email`='{$user_email}',`Username`='{$username}',`Password`='{$user_password}',`Address`='{$user_address}',`City`='{$user_city}',`role`='{$user_role}' WHERE `U.id`='{$user_id}'";


mysqli_query($conn,$query);


header("location:http://localhost/book/register.php");




?>