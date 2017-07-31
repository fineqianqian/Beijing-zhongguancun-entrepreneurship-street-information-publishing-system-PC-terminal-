<?php
    @session_start();

    if(!array_key_exists("username", $_SESSION)){
       // header("Location:login.php");
    	echo "<script>alert('您还未登录！');location.href ='login.php';</script>";

        return;
    }

    else{

     echo "<script>alert('您已经登录！');location.href ='index.php';</script>";

    }
?>