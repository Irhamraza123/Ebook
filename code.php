<?php
session_start();

include "includes/config.php";
if(isset($_FILES["fileToUpload"]))
{
    $error = array();
    
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_temp = $_FILES["fileToUpload"]["tmp_name"];
    $file_ext  = explode(".",$file_name);
    $file_ext = end($file_ext);
    $file_ext = strtolower($file_ext);
    $extension = array("jpg","jpeg","png");
    

    if(in_array($file_ext,$extension) === false)
    {
        $error = "extension must be png , jpg , jpeg";
    }
    if($file_size > 2097152)
    {
        $error = "file size must be less than 2 mb";
    }
    if(empty($error)== true)
    {
        move_uploaded_file($file_temp,"upload/".$file_name);
    }
    else
    {
        print_r($error);
      

    }

}


if(isset($_POST['registerbtn']))
{
    $user_fname=$_POST["fname"];
    $user_phone=$_POST["phone"];
    $user_email=$_POST["email"];
    $username=$_POST["user"];
    $user_password=$_POST["password"];
    $user_address=$_POST["address"];
    $user_city=$_POST["city"];
    $user_role=$_POST["role"];

    $query1 = "SELECT * FROM `users` where `Username` = '{$username}'";
    $result = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result)>0)
    {
        
        $_SESSION['status']="user already exist";
        header("location:register.php");
    }

    else{
        $query= "INSERT INTO `users`(`Name`, `Phone`, `Email`, `Username`, `Password`, `Address`, `City`, `role`,`image`) VALUES ('{$user_fname}','{$user_phone}','{$user_email}','{$username}','{$user_password}','{$user_address}','{$user_city}','{$user_role}','{$file_name}')";

        $result= mysqli_query($conn,$query);
    
        if($result)
        {
        // echo "saved";
           $_SESSION['success']="User Profile Added";
           header('location:register.php');
        }
        else{
            $_SESSION['status']="User Profile Not Added";
            header('location:book/register.php');
        }
    }


    
   

    }


    

   
   
    

   

?>