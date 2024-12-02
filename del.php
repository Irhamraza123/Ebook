<?php

$p_id = $_GET["id"];


include "includes/config.php";


$query5 = "DELETE FROM `products` WHERE `p_id` = '{$p_id}'";

mysqli_query($conn,$query5);


header("location:http://localhost/book/product.php");




?>