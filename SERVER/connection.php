<?php

//db details
$dbHOST = 'localhost';
$dbUsername= 'root';
$dbPassword = '';
$dbName = 'social_donor';

//Connect and select the database
$db = new mysqli ($dbHOST, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection Failed:". $db->connect_error);
}
?>