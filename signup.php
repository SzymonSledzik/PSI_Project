<body>
  <!-- <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

  <section id="id01" class="modal"> -->
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
    <form class="modal-content animate" action="./signup.php" method="POST">
      <section class="imgcontainer">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="uname"><b>Nazwa Użytkownika</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="passwd"><b>Hasło</b></label>
        <input type="password" placeholder="Enter Password" name="passwd" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <section class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="signup" name="butt">Sign Up</button>
        </section>
      </section>
    </form>
  <!-- </section> -->
</body>

</html>

<?php
$uname = '';
$passwd = '';
if (isset($_POST['butt'])) {
  include("./php/functions.php");
  $uname = $_POST['uname'];
  $passwd = $_POST['passwd'];

  addToDB($uname, $passwd);
} ?>