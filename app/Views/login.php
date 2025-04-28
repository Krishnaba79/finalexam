<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login Form | CodingLab </title>
    
 
   </head>
<body>
<a style="text-decoration: none;color:black;" href="/">Home Page</a>
  <div class="main_div">

    <div class="title">Login Form</div>
    <div class="social_icons">
      <a href="#"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
      <a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a>
    </div>
    <form action="/login-user" method="post">
      <div class="input_box">
        <input name="email" type="text" placeholder="Email" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box">
        <input name="password" type="password" placeholder="Password" required>
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
      <div class="option_div">
        <div class="check_box">
          <input type="checkbox">
          <span>Remember me</span>
        </div>
        <div class="forget_div">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <div class="input_box button">
        <input type="submit" value="Login">
      </div>
      <div class="sign_up">
        Not a member? <a href="/register">Signup now</a>
      </div>
    </form>
  </div>
  
</body>
</html>