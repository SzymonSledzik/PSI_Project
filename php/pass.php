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

$query = "SELECT * FROM users";
$result = $conn->query($query);
$rows = $result->num_rows;
function passChecker($passwd, $uname){
    global $rows, $result;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if($uname == $row['uname'] && $passwd == $row['passwd'] )
        {
           return true;
        }
    }
}



?>