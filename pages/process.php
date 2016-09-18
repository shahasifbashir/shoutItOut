<?php
include '../config.php';
    if(isset($_POST['submit'])){
        $user = trim($_POST['user']);
        $message = trim($_POST['message']);
        if($user =="" || $message=="" ){
            $error ="Please fill the form correctly.";
            header("Location:../index.php?error=".urlencode($error));
            exit();
        }
        else{
            $query = "INSERT INTO data (user,message) VALUES ('$user','$message)";
            if(!mysqli_query($con,$query)){
            $error ="Can not connect to the internet";
            header("Location:../index.php?error=".urlencode($error));
            exit();
            }
            else{
                header("Location:../index.php");
                exit();
            }
        }
    }
?>