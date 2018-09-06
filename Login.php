<?php
// Start the session
session_start();
?>
<?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['Login']))
{
  $username = $_POST['UserName'];
  $password = $_POST['Password'];

  $res = $con->selectUser($username,$password);
  if($res)
  {
    ?>
    <?php $_SESSION["UserName"] = $username;?>
    <script>
    alert('Successfull logged in...');
        window.location='User.php'
        </script>
    <?php

  }
  else
  {
    ?>
    <script>
    alert('error login failed...');
        window.location='Login.php'
        </script>
    <?php
  }
}
// data insert code ends here.

?>

<!DOCTYPE html>
<html>
<title>JUST DEAL.COM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="W3Style.css" rel="stylesheet" />
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php" class="w3-bar-item w3-button"><b>JUST DEAL</b> .COM</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="Login.php" class="w3-bar-item w3-button">Login/Register</a>
      <a href="About.html" class="w3-bar-item w3-button">About Us</a>           
    </div>
  </div>
</div>



<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" >
    <h2 class="w3-border-bottom w3-border-black w3-padding-16">Welcome to Login</h2>
    <form class="w3-container w3-card-5" action="" target="" method="POST">
      <input class="w3-input w3-section w3-border" type="text" placeholder="User Name" required name="UserName">
      <input class="w3-input w3-section w3-border" type="password" placeholder="Password" required name="Password">
      <button class="w3-button w3-black w3-section" type="submit" name="Login">
        <i class="fa fa-paper-plane"></i> Login
      </button>
      <p>Doesnt have an account? <a href="Register.php">Register Now!</a></p>
    </form>
  </div>
    <div class="w3-container w3-black w3-center">
    <p>Thank you for using our service :)</p>
  </div>

  
<!-- End page content -->
</div>

<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Maruf & Fahmida</a></p>
</footer>
</body>
</html>
