<?php
require_once './config.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../front-end/login_page.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['event_name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $max_capacity = $_POST['max_capacity'];
    //get the user id
    $select = "SELECT id, email FROM users WHERE email='" . $_SESSION['email'] . "'";
    $query = mysqli_query($connection, $select);
    $row = mysqli_fetch_assoc($query) ;
    $user_id = $row['id'];

    $insert = "INSERT INTO events (name, description, date, max_capacity, created_by) VALUES ('$name','$description','$date','$max_capacity',' $user_id')";
    $result = mysqli_query($connection, $insert) ;
  
    if ($result==true) {
        $_SESSION['message'] = "Event ". $name ." added successfully!";
        header("location:../front-end/dashboard.php") ;
    } else {
        echo '<script>
           alert("Error: Could not create event.") ;
           window.location="../front-end/create_event_page.php";
      </script>';
    }
}
?>