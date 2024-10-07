<?php

echo 'Processing... ';

// Check for GET variable from ajax4.html
if(isset($_GET['name'])){
    
    // add variable to string
    echo 'GET: Your name is '. $_GET['name'];

}
