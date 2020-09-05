<?php
    require_once "login.php";
  $conn = new mysqli($hn, $un, $pw, $db);

  if ($conn->connect_error)
        die ($conn->connect_error);


    if (isset($_POST['submit'])){

        $type=$_POST['type'];
        $cusineName=$_POST['cname'];
        $ingredients=$_POST['ing'];
        $price=$_POST['price'];
        $calories=$_POST['calories'];
          $query="INSERT INTO menu (type,name,items,cost,calories) VALUES ('$type', '$cusineName', '$ingredients','$price','$calories')";
          $result = $conn->query($query);

      }
?>

<style>
        .error {
          color: #FF0000;
        }
    </style>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <body>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <title>Welcome</title>
    </head>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->


    <!-- Links -->

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="welcomepage.php">Home Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customermenu.php">Menu</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="admin_login.php">Employee Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_login.php">User Login</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="addmenu.php">Add Menu</a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>


</nav>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




  </body>
</html>
