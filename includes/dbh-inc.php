<?php

$serviceName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "portal";

$conn = mysqli_connect($serviceName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Connection Failed:" . mysqli_connect_error());

}
