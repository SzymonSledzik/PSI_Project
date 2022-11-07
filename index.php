<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <title>Szczecin, moje miasto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheet/styles.css">
  <link rel="stylesheet" href="stylesheet/register.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"> </script>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Deals</a></li>
            <li><a href="#">Stores</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>     
              
              <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    
              <div id="id01" class="modal">
          
                  <form class="modal-content animate" action="./index.php" method="POST">
                      <div class="imgcontainer">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close"
                              title="Close Modal">&times;</span>
                          <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
                      </div>
          
                      <div class="containerlogin">
                          <label for="uname"><b>Nazwa Użytkownika</b></label>
                          <input type="text" placeholder="Enter Username" name="uname" required>
          
                          <label for="passwd"><b>Hasło</b></label>
                          <input type="password" placeholder="Enter Password" name="passwd" required>
          
                          <button type="submit" name="butt">Login</button>
                          <?php
                            
                            include("php/pass.php");

                            if(isset($_POST['butt'])){
                              $uname = $_POST['uname'];
                              $passwd = $_POST['passwd'];
                              $_SESSION['uname'] = $uname;
                              $_SESSION['passwd'] = $passwd;
                              passChecker($_SESSION['passwd'], $_SESSION['uname']);
                            }

                          ?>
                          <label>
                              <input type="checkbox" checked="checked" name="remember"> Zapamiętaj mnie
                          </label>
                      </div>
          
                      <div class="containerlogin" style="background-color:#f1f1f1">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'"
                              class="cancelbtn">Anuluj</button><br>
                          <span class="passwd"><a href="#">Zapomniałeś hasła??</a></span>
                      </div>
                  </form>
              </div></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>



<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Wały Chrobrego</div>
        <div class="panel-body"><img src="https://zabytki.szczecin.pl/uploads/_RDJHZ3MITnO.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Pomnik Czynu Polaków</div>
        <div class="panel-body"><img src="https://zabytki.szczecin.pl/uploads/_pkmDtj19S0n.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Bazylika archikatedralna św. Jakuba</div>
        <div class="panel-body"><img src="https://zabytki.szczecin.pl/uploads/jAJITOL9eynV.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Pałac Grumbkowa – Pod Globusem</div>
        <div class="panel-body"><img src="https://zabytki.szczecin.pl/uploads/g8lapMOhE5cK.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Kościół św. Jana Ewangelisty</div>
        <div class="panel-body"><img src="https://zabytki.szczecin.pl/uploads/DLkEfmnJAq95.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Baszta Panieńska</div>
        <div class="panel-body"><img src="https://zabytki.szczecin.pl/uploads/T7bf489GE1wd.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">

</footer>

</body>
</html>