<?php

require "conn.php";
$sql = "
        select u.username ,((select count(1) from news n where n.userid=u.id )+(select count(1) from active a where a.userid=u.id )+(select count(1) from jigou j where j.userid=u.id))as num from user u;
        
         
    ";

   $result= mysqli_query($conn, $sql);
   $data ="";
   $array =array();
   class User{
    public $name;
    public $count;

   } 

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

    $user = new User();

    $user->name=$row["username"];
    $user->count=$row["num"];
    $array[]=$user;

    }  
    $data = json_encode($array);
    echo $data;


?>
