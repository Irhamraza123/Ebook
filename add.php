<?php
session_start();




$p_id= $_POST["user_id"];
$p_fname = $_POST["name"];
$p_desc = $_POST["detail"];
$p_img=$_POST["fileToUpload"];
$p_price=$_POST["price"];
$p_auth=$_POST["auth"];




include "includes/config.php";


echo $query4 = "UPDATE `products` SET `p_name`='{$p_fname}',`p_description`='{$p_desc}',`p_img`='{$p_img}',`p_price`='{$p_price}',`p_author`='{$p_auth}' WHERE `p_id`='{$p_id}'";


mysqli_query($conn,$query4);


header("location:http://localhost/book/product.php");




?>