<?php
            @session_start();
			
       
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	欢迎登录: 

	<?php
           
			echo $_SESSION["username"];
       
            echo $_SESSION["userid"];
?>
</body>
</html>