<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doctor Login Form | M Cloud</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Doctor Login</h1>
      <form method="post">
        
         <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Patient ID</label>
        </div>
        
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
        <input type="submit" onclick = "location.href='../OTP/index.html'" value="Login">
        <div class="signup_link">
          Not a member? <a href="..\Doctor  register Form\index.html">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
