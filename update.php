<?php 
 include 'connect.php';

 if (isset($_POST['submit'])) {
    $name =$_POST['name'];
    $email = $_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    
    $sql = "insert into `crud` (name, email, mobile ,password) values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
       // echo "data inserted successfully";
       header('location:display.php');
    } else {
         die(mysql_error($con));
    }
    
    
 }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method='POST' action='user.php'>
            <div class="form-group mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name=' name' autocomplete='off'>

            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name='email' autocomplete ='off'>

            </div>
            <div class="form-group mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile No" name='mobile'
                autocomplete='off'>

            </div>

            <div class="form-group mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your Password" name='password'
                autocomplete='off'>

            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Update</button>
        </form>
    </div>
</body>

</html>