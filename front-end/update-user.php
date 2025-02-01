<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./cdn.html" ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Edit user </title>
</head>

<body class="body">

    <?php
    session_start() ;
    if (isset($_SESSION['email']) && $_SESSION['email'] == "subrota12@gmail.com") {
    require_once "./navbar.php";
    require_once "../back-end/config.php";

    if (isset($_REQUEST['user_id'])) {
        $user_id = $_REQUEST['user_id'] ;
        //get user data
        $get_user = "SELECT * FROM users WHERE id='$user_id'" ;
        $user_data = mysqli_query($connection,$get_user) ;
        $row = mysqli_fetch_assoc($user_data) ;
    ?>

    <br><br>
    <form action="../back-end/update-user-data.php" method="post"
        class="was-validated w-50 mx-auto shadow-lg p-5 bg-body-tertiary rounded">
        <div class="text-center mb-4">
            <h3>Edit user</h3>
        </div>

        <div class="mb-3">
            <input type="text" name="full_name" value="<?php echo $row['full_name'] ; ?>" placeholder="Enter your full name" class="form-control" required />
            <div class="invalid-feedback">Please enter your real name.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <input type="email" name="email" value="<?php echo $row['email'] ; ?>" placeholder="Enter your email" class="form-control" required />
            <div class="invalid-feedback">Please enter a valid email address.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="mb-3">
            <input type="password" name="password"  placeholder="Enter a strong password" class="form-control"
                required />
            <div class="invalid-feedback">Please create a strong password.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="mb-3">
            <input type="password" name="confirm_password" placeholder="Enter password again" class="form-control"
                required />
            <div class="invalid-feedback">Type your same password.</div>
            <div class="valid-feedback">Looks good!</div>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="terms" required />
            <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
        </div>
        <input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>" />
        <button type="submit"  name="update_user"  class="btn btn-primary w-100">Save</button>
    </form>

    <br><br>
    <?php 
    }
    require_once "./footer.html"; 
    ?>

<?php
    }else{
        header("location:./login_page.php") ;
    }
?>
</body>

</html>