<?php

$customer_id = $_GET["id"];


include "includes/config.php";


$query3 = "DELETE FROM `customer` WHERE `C.Id` = '{$customer_id}'";

mysqli_query($conn,$query3);


header("location:http://localhost/book/customer.php");




?>