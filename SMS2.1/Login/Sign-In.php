<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Sign In</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</head>

<body>
  <div class="wrapper">
    <div class="title">
      <img width="150" src="rovasms.PNG" class="logo" />
    </div>
    <form action="#">
      <div class="field">
        <input type="text" required />
        <label>Email Address</label>
      </div>
      <div class="field">
        <input type="password" required />
        <label>Password</label>
      </div>
      <div class="content">
        <div class="checkbox">
          <input type="checkbox" id="remember-me" />
          <label for="remember-me">Remember me</label>
        </div>
        <div class="pass-link"><a href="#">Forgot password?</a></div>
      </div>
      <div class="field">
        <input type="submit" value="Sign In" />
      </div>
      <div class="auth">Or login with</div>
      <div class="links">
        <button type="submit" class="social-btn facebook-log">
          <img width="10" src="facebook.svg" />
          <!-- <i class="fab fa-facebook-f fa-lg" id="facebook"></i> -->
        </button>
        <!-- <div class="facebook">
            <i class="fab fa-facebook-square"><span>Facebook</span></i>
          </div> -->

        <button type="submit" class="social-btn google-log">
          <img width="20" src="google.svg" />
          <!-- <i class="fab fa-google fa-lg google"></i> -->
        </button>
        <!-- <div class="google">
            <i class="fab fa-google-plus-square"><span>Google</span></i>
          </div> -->
      </div>
      <div class="signup-link">
        Not a member? <a href="Sign-Up.php">Sign Up</a>
      </div>
    </form>
  </div>
</body>

</html>