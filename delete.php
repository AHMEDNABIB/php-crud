<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id= $_GET['deleteid'];
    $sql ="delete from `crud` where id = $id";

  

   $result = mysqli_query($con, $sql);
   if ($result) {
       // echo "data deleted successfully";
        $_SESSION['status'] = "Registerd Successfully";
       $_SESSION['status-code']='success';
       header('location:display.php');
    } else {
         //die(mysql_error($con));
         echo 'failed';
    }
    
}
?>