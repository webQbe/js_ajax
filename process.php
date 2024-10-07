<?php

echo 'Processing... ';


// Check for POST variable from ajax4.html
if(isset($_POST['name'])){
    // add variable to string
    echo 'POST: Your name is '. $_POST['name'];
}


// Check for GET variable from ajax4.html
if(isset($_GET['name'])){
    // add variable to string
    echo 'GET: Your name is '. $_GET['name'];
}
