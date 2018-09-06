<?php
// Start the session
session_start();

if(empty($_SESSION["UserName"]))
{
  header("Location: /index.php");
}
?>

<!DOCTYPE html>
<html>
<title>JUST DEAL.COM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="W3Style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
p,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="Index.php" class="w3-bar-item w3-button"><b>JUST DEAL</b> .COM</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="MyAdvertisements.php" class="w3-bar-item w3-button">My Advertisements</a>
      <a href="PostAd.php" class="w3-bar-item w3-button">Post a New Ad</a>
      <a href="UserLogout.php" class="w3-bar-item w3-button"><?php echo $_SESSION["UserName"].",";?>Logout</a>           
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="banner.jpg" alt="banner" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Welcome To Your Panel</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <div class="w3-container w3-padding-32" >
  <?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.

$username = $_SESSION["UserName"];

  $result = $con->showUser($username);
  echo "<div class='w3-row-padding'>";
    while ($row = mysqli_fetch_array($result)) {      
        echo "<div class='w3-full w3-container w3-margin-bottom'>";
            echo "<div class='w3-container w3-white'>";
              //echo "<p>Ad Id: ".$row['ad_id']."</p>";
                echo "<table class='table table-bordered'>";
                echo "<thead>";
                  echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Address</th>";
                    echo "<th>Contact Number</th>";
                    echo "<th>User Name</th>";
                    echo "<th>Email</th>";
                  echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                  echo "<tr>";
                    echo"<td>".$row['name']."</td>";
                    echo"<td>".$row['address']."</td>";
                    echo"<td>".$row['contact_number']."</td>";
                    echo"<td>".$row['user_name']."</td>";
                    echo"<td>".$row['email']."</td>";
                  echo "<tr>";
                echo "</tbody>";
              echo "</table>";
              /*              
                  echo "<h4>Name: ".$row['name']."</h4>";
                  echo "<h4>Address: ".$row['address']."</h4>";
                  echo "<h4>Contact Number: ".$row['contact_number']."</h4>";
                  echo "<h4>User Name: ".$row['user_name']."</h4>";
                  echo "<h4>Email: ".$row['email']."</h4>";*/
             echo '<form class="w3-container w3-card-5" action="" target="" method="POST">';
             echo '<button class="w3-button w3-black w3-section" type="submit" name="DeleteAccount">
              <i class="fa fa-paper-plane"></i> Delete Account
            </button>';
            echo '</form>';
            echo "</div>";
        echo "</div>";
          
    }
  echo "</div>";

if(isset($_POST['DeleteAccount']))
{

  $result1 = $con->DeleteUser($username);
  if($result1)
  {
    ?>
    <script>
    alert('Delete Successfull...');
        window.location='Index.php'
        </script>
    <?php

  }
  else
  {
    ?>
    <script>
    alert('Delete failed...');
        window.location='User.php'
        </script>
    <?php
  }  
}

  ?> 
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Maruf & Fahmida</a></p>
</footer>

</body>
</html>
