
<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require_once "./cdn.html" ?> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
</head>

<body class="body">

  <?php  
   require_once "./navbar.php";

   require_once "../back-end/config.php" ; 
 
   if (isset($_POST['register'])) {
       $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
       $email = mysqli_real_escape_string($connection, $_POST['email']);
       $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   
       // Check if the email already exists
       $select = "SELECT * FROM users WHERE email = '$email'";
       $result = mysqli_query($connection, $select);
   
       if (mysqli_num_rows($result) > 0) {
           echo '<script>
                   Swal.fire({
                       title: "This email already exists",
                       icon: "info",
                       timer: 2500
                   });
                 </script>';
       } else {
           $insert = "INSERT INTO users(full_name, email, user_password) VALUES ('$full_name', '$email', '$password')";
   
           if (mysqli_query($connection, $insert)) {
               header("Location: ../front-end/home.php");
               exit(); 
           } else {
            ?>
            <script>
                Swal.fire({
                    title: "<?php  echo "Error: " . mysqli_error($connection); ?>",
                    icon: "warning",
                    timer: 3500
                });
            </script>
            <?php
           }
       }
   }
   ?>
   
    <br><br>
    <center>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="was-validated w-50 form  shadow-lg p-5  bg-body-tertiary rounded">

        <div class="col-lg-2 col-md-2 col-sm-3 w-50">
            <h3> Register </h3>
        </div>

            <br>
            <div class="col-lg-2 col-md-2 col-sm-3">
                <input type="text" name="full_name" placeholder="Enter your full name" class="form-control"
                    required />
                <div class="invalid-feedback alert-danger"> Enter your real name </div>
                <div class="valid-feedback alert-info">Your name is taking </div>
            </div>
            <br>

            <div class="col-lg-2 col-md-2 col-sm-3">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required />
                <div class="invalid-feedback alert-danger"> Enter valid email </div>
                <div class="valid-feedback alert-info">Your  email is taking </div>

            </div>
            <br>


            <div class="col-lg-2 col-md-2 col-sm-3">
                <input type="password" name="password" placeholder="Enter strong password " class="form-control"
                    required />
                <div class="invalid-feedback alert-danger"> Create your new password </div>
                <div class="valid-feedback alert-info">Your password is taking </div>

            </div>
            <br>
         
            <div class="col-lg-2 col-md-2 col-sm-3">
                <button type="submit" name="register"  class="btn btn-primary w-100" > Register </button>
            </div>
            <br>

            <div class="form-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox" id="invalidCheck2" required />
                <label class="form-check-label ms-2" for="invalidCheck2">Agree to terms and conditions</label>
            </div>
                <div class="d-flex align-items-start mt-3">
                 <strong> Already have an account ? </strong>  <a  href="./login_page.php" class="mx-2"> Login</a>
                     </div>
            <br>
        </form>

    </center>
    <br><br>
     <?php   require_once "./footer.html"; ?>
</body>

</html>