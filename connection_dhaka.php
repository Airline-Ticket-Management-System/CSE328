<?php

$con_dhaka = mysqli_connect('localhost', 'root', '123456', 'booking_dhaka');

if (!$con_dhaka) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
