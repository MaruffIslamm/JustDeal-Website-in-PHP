<?php
include_once 'dbMySql.php';
$con = new DB_con();
$passwordErr = "";
// data insert code starts here.
if(isset($_POST['Register']))
{
  $name = $_POST['Name'];
  $address = $_POST['Address'];
  $contactnumber = $_POST['ContactNumber'];
  $username = $_POST['UserName'];
  $email = $_POST['Email'];
  $password = $_POST['Password'];
  $confirmpassword = $_POST['ConfirmPassword'];


    if($password == $confirmpassword)
    {
        $res1 = $con->IsExistUser($email,$username);
        if($res1)
        {
          ?>
          <script>
          alert('Same email or user name already exist...');
          window.location='Register.php'
          </script>
          <?php
        }
        else
        {
          $res2 = $con->InsertIntoUser($name,$address,$contactnumber,$username,$email,$password);
          if($res2)
          {
              ?>
              <script>
              alert('Registered Successfully...');
              window.location='index.php'
              </script>
              <?php

          }
          else
          {
              ?>
              <script>
              alert('error in Registration...');
              window.location='Register.php'
              </script>
              <?php
          }          
        }
    }
    else
    {
        $passwordErr = "Password and Confirm Password filed must be same";
    }
}
// data insert code ends here.

?>
<!DOCTYPE html>
<html>
<title>JUSTDEAL.COM</title>
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

  <div class="w3-container w3-padding-32" >
    <h2 class="w3-border-bottom w3-border-black w3-padding-16">Welcome to Registration</h2>
    <form class="w3-container w3-card-5" action="" target="" method="POST">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Address" required name="Address">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Contact Number" required name="ContactNumber">

      <input class="w3-input w3-section w3-border" type="text" placeholder="User Name" required name="UserName">
      <input class="w3-input w3-section w3-border" type="email" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="password" placeholder="Password" required name="Password">
      <input class="w3-input w3-section w3-border" type="password" placeholder="Confirm Password" required name="ConfirmPassword">
      <button class="w3-button w3-black w3-section" type="submit" name="Register">
        <i class="fa fa-paper-plane"></i> Register
      </button>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Maruf & Fahmida</a></p>
</footer>

</body>
</html>
