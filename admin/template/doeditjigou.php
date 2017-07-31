<?php 
header("Content-Type:text/html;charset=utf-8");

$id=$_POST["id1"];//当前内容id
$title = $_POST["title"];
$time=time();
$time=date("Y-m-d");
$pageNum = $_POST["pageNum"];
$content=$_POST["content"];

require "conn.php";
    $destPath = "jigou";
    $filePath = "$destPath/" . $_FILES["img"]["name"];
  $sql = "
        update jigou set
        title='$title',content='$content',regdate='$time',img='$filePath' where id=$id
         
    ";
   
    mysqli_query($conn, $sql);
     if(!file_exists($destPath)){
        mkdir($destPath);
    }
    $filePath = "$destPath/" . iconv("utf-8","gbk",$_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
   
    //mysqli_free_result($result);
    header("Location:listjigou.php?pageNum=$pageNum");
    mysqli_close($conn);
?>