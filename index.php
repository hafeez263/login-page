<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    display: flex;
    justify-content: center; 
    align-items: center;     
    min-height: 100vh;      
    margin: 0;
    font-family: Arial, sans-serif;
      background: #f4f4f4 url('wp6701298-dark-series-hd-desktop-wallpapers.jpg') no-repeat center center fixed;
    background-size: cover;
  }

  .form-container {
    background-color: white;
    padding: 20px;
    width: 350px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  }

  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0 20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
  }

  button:hover { opacity: 0.8; }
  .btn-signup { background-color: #04AA6D; }
  .btn-login { background-color: #2196F3; }
  .text-center { text-align: center; }
  hr { border: 0.5px solid #eee; margin-bottom: 20px; }
</style>
</head>
<body>


<div class="form-container" id="signup-form-container">
  <form action="Register.php" method="POST">
    <div class="text-center">
      <h1>Sign Up</h1>
      <p>It's quick and easy</p>
    </div>
    <hr>
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Re-Type password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <p style="font-size: 12px;">By clicking Sign up, you agree to our Terms, Privacy Policy and Cookies Policy.</p>
    
    <button type="submit" class="btn-signup">Sign Up</button>
    <script src="script.js
  "></script>
  </form>

  <div class="text-center">
    <p>Already have an account? <a href="javascript:void(0)" onclick="toggleForms()">Login</a></p>
  </div>
</div>

<style> body {
    display: flex;
    justify-content: center; 
    align-items: center;     
    min-height: 100vh;      
    margin: 0;
    font-family: Arial, sans-serif;
      background: #f4f4f4 url('wp6701298-dark-series-hd-desktop-wallpapers.jpg') no-repeat center center fixed;
    background-size: cover;
  }</style>

<div class="form-container" id="login-form-container" style="display: none;">
  <form action="login_page.php" method="POST">
    <div class="text-center">
      <h1>Login</h1>
      <p>Welcome back!</p>
    </div>
    <hr>
    <label for="login-email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="login-psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn-login">Login</button>
  </form>
  <div class="text-center">
    <p>Don't have an account? <a href="javascript:void(0)" onclick="toggleForms()">Sign Up</a></p>
  </div>
</div>

<script>
  function toggleForms() {
    const signup = document.getElementById('signup-form-container');
    const login = document.getElementById('login-form-container');
    
    if (signup.style.display === "none") {
      signup.style.display = "block";
      login.style.display = "none";
    } else {
      signup.style.display = "none";
      login.style.display = "block";
    }
  }       
</script>

</body>
</html>
