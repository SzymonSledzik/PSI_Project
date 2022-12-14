<?php
session_start();

if (isset($_GET["page"])) {
  $strona = $_GET["page"];
} else {
  $strona = "main";
}

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
  <link rel="stylesheet" href="stylesheet/scrollbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"> </script>
</head>
<script>
  $(document).ready(function() {
    if (!$.browser.webkit) {
      $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
    }
  });
</script>

<body>

  <section class="jumbotron">
    <section class="container text-center">
      <nav class="navbar navbar-inverse">
        <section class="container-fluid">
          <section class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
          </section>
          <section class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php?page=main">Strona Główna</a></li>
              <li><a href="index.php?page=atrakcje">Atrakcje</a></li>
              <li><a href="index.php?page=contact">Kontakt</a></li>
              <li><a href="index.php?page=mapa">Mapa</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span>

                  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                  <section id="id01" class="modal">

                    <form class="modal-content animate" action="./index.php" method="POST">
                      <section class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      </section>
                      <?php


                      ?>
                      <section class="containerlogin">
                        <label for="uname"><b>Nazwa Użytkownika</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="passwd"><b>Hasło</b></label>
                        <input type="password" placeholder="Enter Password" name="passwd" required>

                        <button type="submit" name="butt">Login</button>
                        <?php

                        include("php/functions.php");

                        if (isset($_POST['butt'])) {
                          $uname = $_POST['uname'];
                          $passwd = $_POST['passwd'];
                          $_SESSION['uname'] = $uname;
                          $_SESSION['passwd'] = $passwd;
                          $islogin = passChecker($_SESSION['passwd'], $_SESSION['uname']);
                        }

                        ?>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Zapamiętaj mnie
                        </label>
                      </section>

                      <section class="containerlogin" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Anuluj</button><br>
                        <span class="passwd"><a href="index.php?page=signup">Nie masz konta? Zarejestruj się!</a></span><br>
                        <span class="passwd"><a href="index.php?page=remindpaswd">Zapomniałeś hasła??</a></span>
                      </section>
                    </form>
                  </section>
                </a></li>
              <li><a href="index.php?page=wyszukiwarka"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
          </section>
        </section>
      </nav>
    </section>
  </section>

  <?php
  if ($strona != null) include($strona . '.php');
  ?>



</body>
<footer class="container-fluid text-center">
  <?php if ($islogin === null) {
    echo "DUPA";
  } ?>
  ????????????
</footer>

</html>