<?php
$connection = mysqli_connect('localhost', 'root', 'axelle');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'ghostblade');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>