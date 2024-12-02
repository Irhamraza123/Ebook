<?php

$user_id = $_GET["id"];


include "includes/config.php";


$query = "DELETE FROM `users` WHERE `U.id` = '{$user_id}'";

mysqli_query($conn,$query);


header("location:http://localhost/book/register.php");




?>