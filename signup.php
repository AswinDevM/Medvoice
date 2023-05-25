<?php
include("connection.php");
 
include("connection.php");
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM medsignup WHERE email='$email'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num > 0)
{
  echo '<script>alert("email alredy existed")</script>';

}
else{
  $insert ="INSERT INTO medsignup (username,email, password)VALUES('$username','$email','$password')";
mysqli_query($conn,$insert);
header("location:index.php");
}
}



?>



<html>
<head>
  <meta charset="UTF-8">
  <title>Sign-up Page</title>
  <style>
    body {
      background: linear-gradient(rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(bg.jpg);
      background-size: cover;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      width: 400px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      padding: 40px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .container:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    h1 {
      text-align: center;
      font-size: 28px;
      color: #333333;
      margin: 0 0 30px;
    }
    label {
      display: block;
      font-size: 18px;
      color: #333333;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #CCCCCC;
      margin-bottom: 20px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #dc3434;
    }
    input[type="submit"] {
      background-color: #dc3434;
      color: #FFFFFF;
      padding: 10px 20px;
      font-size: 18px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
      background-color: #fae7e7;
    }
    .form-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #666666;
    }
    .form-footer a {
      color: #dc3434;
      text-decoration: none;
      transition: color 0.3s;
    }
    .form-footer a:hover {
      color: #fae7e7;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="" method="POST">
      <h1>Signup</h1>
      <label for="username">Username:</label>
      <input type="text" name="username" placeholder="Username" required>
      <label for="email">Email/Phno:</label>
      <input type="email" name="email" placeholder="Email/Phno" required>
      <label for="password">Password:</label>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="submit" value="SIGNUP">
      <div class="form-footer">
        ALREADY HAVE AN ACCOUNT? <a href="index.php">Login here</a>
      </div>
    </form>
  </div>
</body>
</html>
