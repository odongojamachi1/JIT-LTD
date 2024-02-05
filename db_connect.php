 <?php
$db_name = "jit_ltd";
$db_host = "localhost";
$db_password = " ";
$db_user = "root";

$connection=mysqli_connect($db_host, $db_user, $db_password , $db_name);
     if (!$connection){
        echo "failed";
     }
     else
     {
        echo"connected successfully";
    }
     ?>