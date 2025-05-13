<?php

$con_other = mysqli_connect('localhost', 'root', '123456', 'booking_other');


if (!$con_other) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
