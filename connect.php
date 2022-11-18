<?php

$serverName = "localhost";
$userName = "root";
$password = '';
$db = "paiproject";


$con = mysqli_connect($serverName, $userName, $password, $db);

$uname = "uname";
$passwd = "passwd";

if (mysqli_connect_errno()) {
    echo "Faild to connect!";
    exit();
}

function addToDB($login, $psw){
    global $con;
    $sql = "INSERT INTO `users` (`ID`, `uname`, `passwd`) VALUES (NULL, '$login', '$psw')";

    if($result = $con->query($sql)) {
        echo "Zarejestrowano pomyślnie";
    }else{ 
        echo "Nie udało się zarejestrować";
    }
}

