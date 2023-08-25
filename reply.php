<?php 
require 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $reply=$_POST['reply'];
         $sql = "INSERT INTO reply (reply) VALUES ('$reply')";
        //  $conn->query($sql);
        if(mysqli_query($conn, $sql)){  

 echo "replyed successfully";  
 header('Location: http://techshiv.lovestoblog.com/detail.php?i=1');
}else{  

echo "Could not replyed yar: ". mysqli_error($conn);  

}
        }
?>