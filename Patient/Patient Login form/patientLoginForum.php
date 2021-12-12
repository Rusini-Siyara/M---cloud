<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Login Form | M Cloud</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Patient Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" onclick = "location.href='../Medical Table(patient view)/medical table.html'">
        
        
        
        <div class="signup_link">
          Not a member? <a href="..\Patient  register Form\index.html">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
