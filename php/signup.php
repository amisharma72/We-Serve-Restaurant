<?php
    require_once "login.php";
  $conn = new mysqli($hn, $un, $pw, $db);

  if ($conn->connect_error)
        die ($conn->connect_error);
if (isset($_POST['submit'])){

$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
$pwd1=$_POST['pwd1'];
$pwd2=$_POST['pwd2'];
$type=$_POST['type'];
  if ($pwd1==$pwd2){
      $message="";
    if ($type=="user"){
  $query="INSERT INTO signup (fname, lname, email, pwd1, pwd2) VALUES ('$firstName', '$lastName', '$email','$pwd1','$pwd2')";
  $result = $conn->query($query);

        if (!$result){
        die($conn->error);
      }




}
   else{
  if ($type=="emp"){
$query="INSERT INTO user_table(fname, lname, email, pwd1, pwd2) VALUES ('$firstName', '$lastName', '$email','$pwd1','$pwd2')";
$result = $conn->query($query);

if (!$result){
      die($conn->error);

  }

}
}


    }
    else{
      $message="Please check password";
    }
  }


?>
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
        <a class="nav-link" href="admin_login.php">Employee Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_login.php">User Login</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
</nav>
  <div class="wrap">
    <h1> Sign Up</h1>


<form method='POST' action="signup.php">

  <input  type="text" name='fname' placeholder="First Name" required><br>

  <input  type="text" name='lname' placeholder="Last Name" required> <br>

  <input type="text" name='email' placeholder="Email" required><br>

  <input type="password" name='pwd1' placeholder="Password" required><br>
  <input  type="password" name='pwd2' placeholder="Password" required><br>

  <input type="radio" id="employee" name="type" value="emp">
  <label for="user">Employee</label><br>
  <input type="radio" id="user" name="type" value="user">
  <label for="user">Customer</label><br>
  <input type='submit'  value= "Submit" name='submit'>


  <?php
  if (isset($_POST['submit'])){
    echo "$message";
  }
 ?>
</form>
</div>
</body>
