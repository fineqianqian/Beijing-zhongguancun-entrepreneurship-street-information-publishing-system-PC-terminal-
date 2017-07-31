<?php

    header("Content-Type:text/html;charset=utf-8");

    $username = $_POST["name"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $time=time();
    $time=date("Y-m-d");

    require "conn.php";

    $sql = "select * from user where username =  '$username' ";

    $result = mysqli_query($conn, $sql);


    if(mysqli_fetch_array($result)){
        header("Location:register.php?error=1");
        mysqli_free_result($result);
        mysqli_close($conn);
        return;
    }
   


  
    $sql = "
        insert into user
          (username, password, email, regdate)
        values ('$username', '$password', '$email', '$time');
    ";
    mysqli_query($conn, $sql);

    header("Location:login.php");
    mysqli_free_result($result);
    mysqli_close($conn);

?>