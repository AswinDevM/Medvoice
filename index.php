<?php

include("connection.php");
if(isset($_POST['submit']))

  if (isset($_POST['username']) && isset($_POST['password'])){

$username = $_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM medsignup WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num > 0)
{
  header("location:home.html");
}
else{
echo'<script>alert("email id and password is not matching")</script>';
}
}
?> 

<html>
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      width: 100%;
      background: linear-gradient(rgba(14, 13, 13, 0.5) 50%, rgba(0, 0, 0, 0.729)), url(bg.jpg);
      background-attachment: fixed;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
      margin: 0;
    }
    .container {
      display: flex;
      width: 900px;
      background-color: #ede3e3;
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      overflow: hidden;
    }
    .sidebar {
      flex: 1;
      background-color: #12a4e3e8;
      color: #ffffff;
      padding: 40px;
      border-radius: 30px 0px 0px 30px;
    }
    .sidebar h2 {
      font-size: 50px;
      color: #ffffff;
      margin-top: 30px;
      margin-bottom: 20px;
    }
    .sidebar marquee {
      font-style: italic;
    }
    .login {
      flex: 1;
      padding: 40px;
      border-radius: 0px 5px 5px 0px;
      transition: background-color 0.3s;
    }
    .login:hover {
      background-color: #f8f8f8;
    }
    .login h1 {
      text-align: center;
      font-size: 28px;
      margin-top: 0;
      color: #333333;
    }
    .login label {
      display: block;
      font-size: 18px;
      color: #333333;
      margin-bottom: 5px;
    }
    .login input[type="text"],
    .login input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #CCCCCC;
      margin-bottom: 20px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }
    .login input[type="text"]:focus,
    .login input[type="password"]:focus {
      border-color: #dc3434;
    }
    .login p {
      font-size: 90%;
      color: #0d0d0d;
      border-radius: 30%;
      text-align: center;
    }
    .login p button {
      border-radius: 20%;
      padding: 10px;
      color: #ffffff;
      background-color: #b52525;
      font-size: medium;
      transition: background-color 0.3s;
    }
    .login p button:hover {
      background-color: #dc3434;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h2>MEDVOICE</h2>
      <marquee><i><b>The voice-assisted doctor's appointment scheduler</b></i></marquee>
    </div>
    <div class="login">
      <h1>Login</h1>
      <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <p>
          <button type="submit" name="submit"><b>Submit</b></button>
        </p>
        <p>
          Don't have an account? <a href="signup.php">Sign up</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
