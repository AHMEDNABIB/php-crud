<?php 
 include 'connect.php';

//  $id =$_GET['updateid'];
//  $sql = "Select * from `crud` where id =$id ";
//  $result = mysqli_query($con,$sql);
// $row = mysqli_fetch_assoc(
//     $result
// );
// $name= $row['name'];
// $email=$row['email'];
// $mobile = $row['mobile'];
// $password =$row['password'];



//  if (isset($_POST['submit'])) {
//     $name =$_POST['name'];
//     $email = $_POST['email'];
//     $mobile=$_POST['mobile'];
//     $password=$_POST['password'];

    
//     $sql = "update `crud` set id=$id, name='$name' , email='$email', mobile ='$mobile' , password= '$password' where id=$id ";

//     $result = mysqli_query($con, $sql);
//     if ($result) {
//         //echo "data updated successfully";
//        $_SESSION['status'] = "Updated Successfully";
//        $_SESSION['status-code']='success';
//        header('location:display.php');
//     } else {
//          die(mysql_error($con));
//     }
    
    
 //}
?> 


<?php 
//   include 'connect.php';
 include('includes/header.php');
 ?>

    <div class="container my-5">
        <form method='POST' action="" >
            <div class="form-group mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name=' name' autocomplete='off'
                value=<?php echo $name?>
                >

            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name='email' autocomplete ='off' value=<?php echo $email?>
                
                >

            </div>
            <div class="form-group mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile No" name='mobile'
                autocomplete='off'
                value=<?php echo $mobile?>>

            </div>

            <div class="form-group mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your Password" name='password'
                autocomplete='off'
                value=<?php echo $password?>>

            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Update</button>
        </form>
    </div>

   <?php 
//   include 'connect.php';
 include('includes/footer.php');
 ?>