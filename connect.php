<?php

$serverName = "localhost";
$userName = "root";
$password = NULL;
$db = "paiproject";


$con = mysqli_connect($serverName, $userName, $password, $db);

if (mysqli_connect_errno()) {
    echo "Faild to connect!";
    exit();
}

echo "Great work!!!";
