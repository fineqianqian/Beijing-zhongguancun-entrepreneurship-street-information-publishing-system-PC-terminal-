<?php

 require "conn.php";

   

    $id = $_GET["id"];

    $sql = "delete  from active where id = $id ";

    $result = mysqli_query($conn, $sql);
  
    if($result){
       
        echo 1;
      

    }

    


?>