<?php
require_once '../back-end/config.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ./login_page.php");
    exit();
}
 //get the user id
 $select = "SELECT id, email FROM users WHERE email='" . $_SESSION['email'] . "'";
 $query = mysqli_query($connection, $select);
 $row = mysqli_fetch_assoc($query) ;
 $user_id = $row['id'];

$get_events = "SELECT * FROM events WHERE created_by='$user_id' ORDER BY date ASC " ; 
$events = mysqli_query($connection, $get_events) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php   require_once "./cdn.html";  ?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Dashboard</title>
   
</head>
<body>
<?php
 require_once "./navbar.php"; 
?>
    <div class="container mt-5">
     <h1 class="text-center mb-4">Event Dashboard</h1>
        

<?php  
$row_count = mysqli_num_rows($events) ;
if($row_count > 0 ) {

    if(isset($_SESSION['message']) && $_SESSION['message']!="") {
         ?>
           <script>
            Swal.fire({
                title: "<?php echo $_SESSION['message'] ?>",
                icon: "success",
                timer: 3000
            });
          </script>;
        <?php 
    }

    if(isset($_SESSION['message'] )){
        $_SESSION['message'] = ""  ;
    }

?>

 
        <a href="./create_event_page.php" class="btn btn-success mb-3">Create Event</a>
        
        <table class="table table-bordered table-hover text-center my-5 table-striped">
            <thead class="thead-dark">
                <t>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Max Capacity</th>
                    <th colspan="2"> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?= htmlspecialchars($event['name']) ?></td>
                        <td><?= htmlspecialchars($event['description']) ?></td>
                        <td><?= htmlspecialchars($event['date']) ?></td>
                        <td><?= htmlspecialchars($event['max_capacity']) ?></td>
                        <td> <a href="./update-event.php?event_id=<?php echo $event['id'] ;?>"> <i class="fa-solid fa-edit text-success"></i> </a>  </td>
                        <td> <a href="../back-end/delete_event.php?event_id=<?php echo $event['id'] ;?>" onclick="return confirm('Are you want to delete this data ?')"> <i class="fa-solid fa-trash text-danger"></i> </a>  </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
<?php 
} else {
    ?>
      <p class='text-danger fw-bold text-center my-5 fs-2'> Events data not found </p> ; 
        <a href="./create_event_page.php" class="btn btn-success mb-3">Create Event</a>

        
    <?php 
}
require_once "./footer.html";

?>
</body>
</html>

