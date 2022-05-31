<!DOCTYPE html>
<html>
<head>
    <title>SignUp_Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styling/login.css">
    <script type="text/javascript" src="../JS/login.js"></script>
</head>
<body>

<div class="bg-img">
  <div class="content">
    <header>SignUp Form</header>
    <form action="#">
      <div class=" pb-4 field">
        <span class="fa fa-user"></span>
        <input type="text" required placeholder="Email or Phone">
      </div>
       <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" required placeholder="Username">
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input type="password" class="pass-key" required placeholder="Password">
        <span class="show">SHOW</span>
      </div>
      <div class="pass">
        <a href="#">Forgot Password?</a>
      </div>
      <div class="field">
        <input type="submit" value="SIGNUP">
      </div>
    </form>
    <div class="login">Or signup with</div>
    <div class="links">
      <div class="facebook">
        <i class="fab fa-facebook-f"><span>Facebook</span></i>
      </div>
      <div class="instagram">
        <i class="fab fa-instagram"><span>Instagram</span></i>
      </div>
    </div>
    <div class="signup">Already have an account?
      <a href="login.php">Login Now</a>
    </div>
  </div>
</div>
<script type="text/javascript" src="main.js"></script>
</body>
</html>

