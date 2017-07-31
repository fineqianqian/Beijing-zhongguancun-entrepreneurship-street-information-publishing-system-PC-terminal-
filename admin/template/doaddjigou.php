<?php

    header("Content-Type:text/html;charset=utf-8");
    session_start();
    $title = $_POST["title"];
    $pageNum = $_POST["pageNum"];
    $time=time();
    $time=date("Y-m-d");
    $content=$_POST["content"];
    require "conn.php";
    $destPath = "jigou";
    $filePath = "$destPath/" . $_FILES["img"]["name"];
    $sql = "
        insert into jigou
          ( title, content , regdate, img ,userid)
        values ('$title', '$content',  '$time','$filePath','$userid');
    ";
    mysqli_query($conn, $sql);
   
 if(!file_exists($destPath)){
        mkdir($destPath);
    }
    $filePath = "$destPath/" . iconv("utf-8","gbk",$_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
   
    //mysqli_free_result($result);
   echo "<script>alert('成功！！');location.href='listjigou.php?pageNum=$pageNum';</script>";
    mysqli_close($conn);

   



  



  
  


?>