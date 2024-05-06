<?php

$con = new mysqli("localhost","root","","pixelite");

if ($con -> connect_error) {
    die("Can not connect". $con->connect_error);
}

?>