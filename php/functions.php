<?php
$serverName = "localhost";
$userName = "root";
$password = '';
$db = "paiproject";


$conn = mysqli_connect($serverName, $userName, $password, $db);


function addToDB($login, $psw)
{
    global $conn;

    $query = "SELECT * FROM users WHERE uname= '$login'";
    if ($query == null) {
        $pswd = sha1($psw);
        $sql = "INSERT INTO `users` (`ID`, `uname`, `passwd`) VALUES (NULL, '$login', '$pswd')";

        if ($result = $conn->query($sql)) {
            echo "Zarejestrowano pomyślnie";
        } else {
            echo "Nie udało się zarejestrować";
        }
    } else {
        echo "Takie konto już istnieje";
    }
}

function passChecker($passwd, $uname)
{
    global $conn;

    $query = "SELECT * FROM users WHERE uname = '$uname' ";
    $result = $conn->query($query);
    if ($result != null) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (sha1($passwd) == $row['passwd']) {
            return true;
        } else {
            return false;
        }
    } else {
        echo "XDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD";
        return false;
    }
}

function showMonument($name)
{
    global $conn;

    $query = "SELECT * FROM monuments WHERE page = '$name' ";
    $result = $conn->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo "<h1>" . $row['monument'] . "</h1>";
    echo "<p>" . $row['info'] . "</p>";
    echo "<img src='" . $row['img'] . "' width=250px>";
}

function addComment($name, $surname, $message, $strona)
{
    global $conn;
    $sql = "INSERT INTO `comments` (`ID`, `name`, `surname`, `message`, `page`) VALUES (NULL, '$name', '$surname', '$message', '$strona')";

    if ($result = $conn->query($sql)) echo "Dodano nowy rekord";
    else echo "Nie udało się dodać nowego rekordu";
}

function showComment($strona)
{
    global $conn;
    $query = "SELECT * FROM comments WHERE page = '$strona'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_row($result)) {
        echo "<h3>" . $row[1] . " " . $row[2] . "</h3> <p>" . $row[3] . "</p>";
    }
}

function contactForm($name, $surname, $message)
{
    global $conn;
    $sql = "INSERT INTO `messages` (`ID`, `name`, `surname`, `message`) VALUES (NULL, '$name', '$surname', '$message')";

    if ($result = $conn->query($sql)) echo "Dodano nowy rekord";
    else echo "Nie udało się dodać nowego rekordu";
}
