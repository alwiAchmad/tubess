<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Nova Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans Bengali' rel='stylesheet'>
    <title>Login</title>
  </head>
  <body>
      <div class="judul">
        <P>WELCOME BACK!</P>
      </div>
      <div class="background-putih">
        <div class="form">
          <form class="" action="loginController.php" method="post">

            <label>Email</label><br>
            <input type="email" name="email">
            <br>

            <label>Password</label><br>
            <input type="password" name="password">
            <br>

            <button type="button" name="button" class="google"> <img src="logo-google.svg"> </button>
            <button type="button" name="button"  class="apple"> <img src="logo-apple.svg"> </button><br>
            <a href="#"><button type="submit" name="login" value="login" class="login">Login</button><br></a>
            <a href="../Register/reg.php"><button type="button" name="button" class="sign-up">sign up</button></a>
            
          </form>
        </div>
      </div>
  </body>
</html>
