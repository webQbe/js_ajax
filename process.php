<?php

// Create a database table
// 1. Go to localhost/phpmyadmin
// 2. Go to Databases > Create Database > Enter database name > Create
// 3. Create table > users with 2 columns > Go
// 4. Column name > id (INT), length (11), Auto Increment, PRIMARY
// 5. Column name > name (VARCHAR), length (100)
// 6. Click Save


// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ajax_test');




echo 'Processing... ';

if(isset($_POST['name'])){

    // mysqli_real_escape_string() used for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    echo 'POST: Your name is '. $_POST['name'];

    // insert user to users table
    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){

        echo 'User Added...';

    } else {

        echo 'ERROR: '. mysqli_error($conn);

    }
}


// Check for GET variable from ajax4.html
if(isset($_GET['name'])){
    // add variable to string
    echo 'GET: Your name is '. $_GET['name'];
}
