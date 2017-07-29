<?php

// mysqli_connect params: 1.server 2.username 3.password 4.database name
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$connection) {
    
    die("CONNECTION FAILED. " . mysqli_error($connection));
    
}

?>