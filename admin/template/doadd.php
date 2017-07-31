<?php
    header("Content-type: text/html; charset=utf-8"); 
    session_start();
   
    $title = $_POST["title"];
    $pageNum = $_POST["pageNum"];
    $time=time();
    $time=date("Y-m-d");
    $content=$_POST["content"];
   
    $userid = $_SESSION["userid"];

    require "conn.php";
    $destPath = "upload";
    $filePath = "$destPath/" . $_FILES["img"]["name"];
    $sql = "
        insert into news
          ( title, content,regdate, img ,userid)
        values ('$title', '$content',  '$time','$filePath',
        '$userid');
    ";
    mysqli_query($conn, $sql);


   
 if(!file_exists($destPath)){
        mkdir($destPath);
    }
    $filePath = "$destPath/" . iconv("utf-8","gbk",$_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
   
    //mysqli_free_result($result);
   // header("Location:list.php");
     echo "<script>location.href='list.php?pageNum=$pageNum';</script>";
    mysqli_close($conn);

?>