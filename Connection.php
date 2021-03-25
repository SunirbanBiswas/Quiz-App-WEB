<?php

$db = mysqli_connect("localhost","root","","quiz game");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
