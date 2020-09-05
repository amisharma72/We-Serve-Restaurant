<?php
    require_once "login.php";
  $conn = new mysqli($hn, $un, $pw, $db);

  if ($conn->connect_error)
        die ($conn->connect_error);


if (isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="SELECT * from user_table where email='$username'";
$result = $conn->query($query);
if (!$result)
  die($conn->error);
if($result->num_rows>0){
  $error=" ";
  $row=$result->fetch_assoc();
  $actualPassword=$row['pwd2'];

  if ($password=$actualPassword){


  header("location:adminmenu.php");
  exit();
}
else{
  $error="Please Chcek Username or Password";
}






}


}
        ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title> Employee Login</title>
  </head>
  <style>
          .error {
            color: #FF0000;
          }
      </style>
      <link rel="stylesheet" href="../css/sign_up1.css" type="text/css">
      <body>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Welcome</title>
      </head>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">


      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="welcomepage.php">Home Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customermenu.php">Menu</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="user_login.php">User Login</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
  </nav>

    <body>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <div class="wrap">

  <h1>Log In!</h1>
  <p>Enter your email and password!</p>





    <form method='POST' action='admin_login.php'>
  User Name:<br>
  <input type="text"  name='username'><br>
  Password:<br>
  <input type="password" name="password"><br>
    <input id ='sub' type='submit' name='submit'>

    <?php
    if (isset($_POST['submit'])){
      echo "$error";
    }
    ?>
</form>
</div>
  </body>

</html>
