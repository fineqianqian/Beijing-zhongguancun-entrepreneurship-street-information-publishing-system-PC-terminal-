


<?php
    //获得请求参数用户名、密码
    //根据用户名密码查询用户表
    //能查出数据，表示用户名、密码正确
    //查不出数据，表示用户名或密码错误
 
 //header("Content-Type:text/html;charset=utf-8");

        @session_start();
         /* if(isset($_SESSION["username"]))
          {
            echo "<script>
             location.href ='index.php';</script>";
          }
*/
    require "conn.php";

    $username = $_POST["username"];
    
    $password = $_POST["password"];

 

    $sql = "
        select *
        from user
        where username = '$username' and password = '$password'
    ";
    $result  = mysqli_query($conn, $sql);
    //print_r(mysqli_fetch_array($result));

    

    if($row=mysqli_fetch_array($result,MYSQL_ASSOC)){

       
        $id=$row["id"];
        echo "<script>location.href ='index.php';</script>";
        $_SESSION["username"] = $username;

        $_SESSION["userid"] = $id;
    
         //$_SESSION["username"] = $id;
        //header("Location:index.php");
         mysqli_free_result($result);
         mysqli_close($conn);
         return;
    }
    else{

           
    echo "<script>location.href ='login.php?error=1';</script>";
    
    mysqli_free_result($result);
    mysqli_close($conn);



    }
   
    
?>