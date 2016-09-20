<?php
include '../config.tpl';
    if(isset($_POST['submit'])){
        $user = stripslashes(trim($_POST['user']));
        $message = stripslashes(trim($_POST['message']));
        $bool = (!isset($user) || $message == '' || !isset($message) || $user=='');
        if($bool){
            $error ="Please fill the form correctly.";
            header("Location:../index.php?error=".urlencode($error));
            exit();
        }
        else{
            $query = "INSERT INTO data (user,message) VALUES ('$user','$message')";
            $done = mysqli_query($con,$query);
            if(!($done)){
                $error ="Can not connect to the internet";
                header("Location:../index.php?error=".urlencode($error));
                exit();
            }
            else{
                header("Location: ../index.php");
                exit();
            }
        }
    }
?>