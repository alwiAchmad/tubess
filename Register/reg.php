<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Register</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ruda' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="kanan">
      <form class="" action="registercontroller.php" method="post">
        <h1>CREATE YOUR ACOUNT</h1>
        <div class="form" method="get">
          <label for="">Full Name</label><br>
          <input type="text" name="nama" id="name_user"><br>

          <label for="">Email address</label><br>
          <input type="email" name="email" id="email"><br>

          <label for="">Phone Number</label><br>
          <input type="text" name="notelp" id="telp"><br>

          <label for="">Password</label><br>
          <input type="password" name="password" id="pass"><br>
          
          <label for="">Confirm Password</label><br>
          <input type="password" name="con_pass" id="pass2"><br>

          <a href="../login/index.php"><button type="button" name="button">Login</button></a>
          <a href="#"><button type="submit" class="Sign-up">Register</button></a>
      </form>
      </div>
    </div>

    <div class="kiri">
      <div class="logo">
        <img src="logo.svg" alt="" width="50%">
      </div>
      <div class="judul">
        <img src="judul.svg" alt="" width="50%">
      </div>

    </div>

    <script type = “text/javascript” src =“js_regis.js”></script>
  </body>
</html>
