<?php 
//   include 'connect.php';
 include('includes/header.php');
 ?>

<?php 
 include 'connect.php';
 ?>


    <div class="container ">
        <button class='btn btn-primary my-5'><a href="user.php" class='text-light'>Add user</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

    <?php
        $sql =  "SELECT * from `crud`";

        $result = mysqli_query($con , $sql);

        if ($result) {
            // $row = mysqli_fetch_assoc($result);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name= $row['name'];
                $email=$row['email'];
                $mobile = $row['mobile'];
                $password =$row['password'];

                echo '
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>

                    <td>
                     <button class="btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                      <button class="btn btn-danger "><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                      </td>
                </tr>
                ';
            }
        }
 
        
    ?>
    
                      
  
  
  </tbody>
</table>
    </div>
    
<?php 
//   include 'connect.php';
 include('includes/footer.php');
 ?>