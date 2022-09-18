<?php 
 include 'connect.php';
 ?>


<?php




 if (isset($_POST['submit'])) {
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    
    $sql = "insert into `crud` (name, email, mobile ,password) values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
       echo "data inserted successfully";
    //    $_SESSION['status'] = "Registerd Successfully";
    //    $_SESSION['status-code']='success';
      header('location:index.php');
    } else {
        // die(mysql_error($con));
         header('location:user.php');
    }
    
    
 }
?>