<?php
    define("HOST","localhost");
    define("USERNAME","root");
    define("PASSWORD","123");
    define("DBNAME","myphp");
    define("CHARSET","utf8");

    //连接MySQL服务器
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

    if(!$conn){
        die("连接失败：" . mysqli_connect_error());
    }

    $sql = "set names " . CHARSET;
    mysqli_query($conn, $sql);

?>