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
    
    if($uname == $row['uname'] && $passwd == $row['passwd'] ){
        echo "<div>Zalogowany</div>";}
    else{
        echo "Zaloguj się chuju";
    } 
}



?>