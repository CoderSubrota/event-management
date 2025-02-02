Now I will discuss about my whole working process.
So basically I worked with some steps now I am telling about that process :

# First Step #
I worked with database to save data  into mariaDB database.

# Using this queries:

CREATE DATABASE event-management

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    date DATE NOT NULL,
    max_capacity INT NOT NULL,
    created_by INT NOT NULL,
    FOREIGN KEY (created_by) REFERENCES users(id)
);

CREATE TABLE attendees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (event_id) REFERENCES events(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
); 

CREATE TABLE participants(
     id INT AUTO_INCREMENT PRIMARY KEY,
     full_name VARCHAR(225),
     email VARCHAR(252) UNIQUE NOT NULL,
     event_id INT(28)
)

# Than I connect this database with my localhost using this code :


<?php
$host = "localhost"; 
$username = "root";
$password = "";
$database = "event-management";
$port = 3308;

$connection = mysqli_connect($host, $username, $password, $database, $port);
?>

you can change your port if it is different.

# Second Step #

I created some directory like front-end, back-end and css to get the clear idea about code.

I used database configuration to connect with database the file name is config.php and session for get track the authenticate user and I build CRUD 
operation for events and users.Only admin can access the participant download
table column and show users for CRUD.

I use require_once to include the files. I created files some of them :

-> home.php for landing page

-> config.php for configuration the database

-> cdn.html for work with content delivery network like bootstrap and google font family

-> index.php to secure the all files

-> navbar.php and footer.html to share with all files

-> style.css to add more style or color for html 

after completed my task so far I did. I deployed the files to GitHub.

# Third step

I host the website in (https://www.infinityfree.com/) to share with you the live link of this website. I think it will not work because this is free hosting service and unsecure live link.Sorry, to say I can't afford a paid domain for this task.

>>  You can check this code locally if the provided live website link showing some error. You can get my database in GitHub Repository just go to the database directory you will get the database.

# GitHub Repository Link

# Live Website Link

# User login information

# Authenticate user login information

Email: davidkrish22@gmail.com
Password : David1234### 

# Admin login information:

Email: subrota12@gmail.com
Password: Subrota7867@%


