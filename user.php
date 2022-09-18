


<?php 
//   include 'connect.php';
 include('includes/header.php');
 ?>
<?php 
 include 'connect.php';
 ?>


    <div class="container my-5">
        <form method='POST' action='code.php'>
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

            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>
    </div>
    

        
<?php 
//   include 'connect.php';
 include('includes/footer.php');
 ?>