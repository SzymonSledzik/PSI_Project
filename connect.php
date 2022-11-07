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

echo "Great work!!!"."<br>";

function addToDB($login, $psw){
    global $con;
    $sql = "INSERT INTO `users` (`ID`, `uname`, `passwd`) VALUES (NULL, '$login', '$psw')";

    if($result = $con->query($sql)) {
        echo "Dodano nowy rekord";
    }else{ 
        echo "Nie udało się dodać nowego rekordu";
    }
}

