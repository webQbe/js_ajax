<?php 

// create connection
$conn = mysqli_connect('localhost', 'root', '', 'ajax_test');

// select all users
$query = 'SELECT * FROM users';

// get result
$result = mysqli_query($conn, $query);

// fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// convert data into json format
echo json_encode($users);

