<?php
/* Change for your username and password for phpMyAdmin*/
define('DB_SERVER', 'classmysql.engr.oregonstate.edu');
define('DB_USERNAME', 'cs340_sturosl');
define('DB_PASSWORD', 'adap##28FANNNNNN');
define('DB_NAME', 'cs340_sturosl');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
