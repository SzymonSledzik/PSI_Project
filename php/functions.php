<?php
$serverName = "localhost";
$userName = "root";
$password = '';
$db = "paiproject";


$conn = mysqli_connect($serverName, $userName, $password, $db);


function signUp($login, $psw)
{
    global $conn;

    $query = "SELECT * FROM users WHERE uname= '$login'";
    $result = $conn->query($query);
    if ($result->num_rows === 0) {
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
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($uname == $row['uname']) {
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

function addComment($name, $message, $strona, $islogin)
{
    if ($islogin == true) {
        global $conn;
        $sql = "INSERT INTO `comments` (`ID`, `name`, `message`, `page`) VALUES (NULL, '$name', '$message', '$strona')";

        if ($result = $conn->query($sql)) echo "Dodano nowy rekord";
        else echo "Nie udało się dodać nowego rekordu";
    } else {
        echo "Zaloguj się by dodać komentarz!!";
    }
}

function showComment($strona)
{
    global $conn;
    $query = "SELECT * FROM comments WHERE page = '$strona'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_row($result)) {
        echo "<h3>" . $row[1] . "</h3> <p>" . $row[2] . "</p>";
    }
}

function contactForm($name, $message)
{
    global $conn;
    $sql = "INSERT INTO `messages` (`ID`, `uname`, `message`) VALUES (NULL, '$name', '$message')";

    if ($result = $conn->query($sql)) echo "Dodano nowy rekord";
    else echo "Nie udało się dodać nowego rekordu";
}

function panelShowComment($panelname)
{
    global $conn;
    $sql = "SELECT * FROM comments WHERE page = '$panelname'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_row($result)) {
        echo "<h3>" . $row[1] . " " . $row[2] . "</h3> <p>" . $row[3] . "</p>";
    }
}

function panelDeleteComment($message)
{
    global $conn;
    $sql = "DELETE FROM `messages` WHERE `message`= '$message'";

    if ($result = $conn->query($sql)) echo "Usunieto rekord";
    else echo "Nie udało się usunac rekordu";
}

function panelAddInfo()
{
}

function updateUserInfo()
{
}
