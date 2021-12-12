<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Doctor Registration Form | M cloud</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Doctor Registration</div>
    <div class="content">
      <form action="DoctorRegister.php">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="email" placeholder="Email" name="email"  required>
          </div>


          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your doctor ID as Username" name="username" required>
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" placeholder="Enter your phone number" name="mobile" required>
          </div>

          <div class="input-box">
            <span class="details">National ID </span>
            <input type="text" placeholder="Enter your ID" name="nId" required>
          </div>

          <div class="input-box">
            <span class="details">Address </span>
            <input type="text" placeholder="Enter your address" name="address" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>     
         
          <div class="input-box">
            <span class="details">Date of birth</span>
            <input type="text" placeholder="YYYY-MM-DD" name="birth" required>
          </div>

          <div class="input-box">
            <span class="details">Specialization</span>
            <input type="text" placeholder="Enter your specialization"  name="specialization" required>
          </div>

          <div class="input-box">

            <span class="details">Gender</span>
   
             <select name= "gender" class="details" required>
               <option value="-1">Select Gender</option>
               
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Prefernottosay">Prefer not to say</option>
             </select>
   
          </div>
         
        </div>

          <div class="button">
            <input type="submit" onclick = "location.href='../Doctor Login form/doctorLoginForum.php'" value="Register">
          </div> 
      </form>
    </div>
  </div>
 
</body> 
</html>
