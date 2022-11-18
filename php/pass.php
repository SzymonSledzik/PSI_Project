<?php
if(isset($_POST['butt'])){
    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];   
    $_SESSION['uname'] = $uname;
    $_SESSION['passwd'] = $passwd;   
};


$serverName = "localhost";
$userName = "root";
$password = '';
$db = "paiproject";


$conn = mysqli_connect($serverName, $userName, $password, $db);




function passChecker($passwd, $uname){
    global $conn;
    $query = "SELECT * FROM users WHERE uname = '$uname' ";
    $result = $conn->query($query);
    $rows = $result->num_rows;
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if($uname == $row['uname'] && $passwd == $row['passwd'] )
    {
        return true;
    }
}



?>