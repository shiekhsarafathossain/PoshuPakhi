<?php
$con = new mysqli('localhost', 'root', '', 'mystore');

if (!$con) {
    die(mysqli_error($con));
}
?>