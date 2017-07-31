<?php
     header("Content-Type:text/html;charset=utf-8");
    @session_start();

    session_destroy();
    /*header("Location:login.php");*/
    echo "<script>alert('页面已注销！');location.href ='login.php';</script>";
?>
