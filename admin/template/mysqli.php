<?php
    header("Content-Type:text/html;charset=utf-8");
?>
<?php

    require "conn.php";

    //创建数据库
    $sql = "create database if not exists myphp";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo "<br/>";

    if(!$result){
        die("数据库创建失败：" . mysqli_error($conn));
    }

    //删除数据库
    $sql = "drop database if exists myphp ";
//    mysqli_query($conn, $sql);

    //选择使用的数据库
    $sql = "use myphp";
    $result = mysqli_query($conn, $sql);

    var_dump($result);
    echo "<br/>";

    //创建表
    $sql = "
        create table if not exists user(
          id int(11) primary key auto_increment not null,
          username varchar(20),
          password varchar(20),
          email varchar(20),
          regdate varchar(20)
        
        )
    ";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo "<br/>";
//    $sql = "alter table t_user drop column aaa";
//    mysqli_query($conn, $sql);、

    //设置连接字符集
    $sql = "set names utf8";
    var_dump(mysqli_query($conn, $sql));
    echo "<br/>";
    
   

     $sql = "
          create table if not exists  news (
          id int primary key auto_increment not null,
          title varchar(100) not null,
           userid int  not null,

          content varchar(200) not null,
          regdate varchar(20 ) not null,
          img varchar(800) not null

        
        )
    ";

    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo "<br/>";


        $sql = "
          create table if not exists  jigou (
          id int primary key auto_increment not null,
          title varchar(100) not null,
          userid int  not null,

          content varchar(200) not null,
          regdate varchar(20 ) not null,
          img varchar(800) not null

        
        )
    ";

    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo "<br/>";
    
   $sql = "
          create table if not exists  active (
          id int primary key auto_increment not null,
          title varchar(100) not null,
          userid int  not null,

          content varchar(200) not null,
          regdate varchar(20 ) not null,
          img varchar(800) not null

        
        )
    ";

    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo "<br/>";
    

    //DML
    //插入
   /* $sql = "
        insert into t_user
          (username, password, age, hobbies, img)
        values ('admin', '123', 22, '吃饭,睡觉,打豆豆', 'upload/aaa.jpg');
    ";*/
//    $result = mysqli_query($conn, $sql);
/*    var_dump($result);
    echo "<br/>";*/

    //修改
   /* $sql = "
        update t_user
        set age = 111
        where id = 5
    ";
    mysqli_query($conn, $sql);*/

    //删除
   /* $sql = "delete from t_user";*/
//    mysqli_query($conn, $sql);

    //DQL
  /*  $sql = "select * from t_user ";
    $result = mysqli_query($conn, $sql);
    print_r($result);
    echo "<br/>";

    while(($row = mysqli_fetch_array($result,MYSQLI_ASSOC))){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }*/

    //释放资源
    mysqli_free_result($result);
    mysqli_close($conn);
?>