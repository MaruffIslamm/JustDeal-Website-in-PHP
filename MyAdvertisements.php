<?php
session_start();

if(empty($_SESSION["UserName"]))
{
  header("Location: /project-1/index.php");
}
?>

<!DOCTYPE html>
<html>
<title>JUST DEAL.COM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="W3Style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php" class="w3-bar-item w3-button"><b>JUST DEAL</b> .COM</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="User.php" class="w3-bar-item w3-button">My Panel</a>
      <a href="UserLogout.php" class="w3-bar-item w3-button"><?php echo $_SESSION["UserName"].",";?>Logout</a>        
    </div>
  </div>
</div>


<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <div class="w3-container w3-panel w3-black w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-36">All Advertise</h3>
  </div>
 <!-- First Photo Grid-->
  <?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.

$username = $_SESSION["UserName"];

  $result = $con->selectMyAdvertisement($username);  
  echo "<div class='w3-row-padding'>";
    while ($row = mysqli_fetch_array($result)) {      
        echo "<div class='w3-third w3-container w3-margin-bottom'>";
          echo "<a href='Advertise.php?id=".$row['ad_id']."' target='_self'><img src='".$row['image_1']."' alt='Photo1' style='width:100%' class='w3-hover-opacity'></a>";
            echo "<div class='w3-container w3-white'>";
              //echo "<p>Ad Id: ".$row['ad_id']."</p>";
                echo "<p>".$row['ad_title']."</p>";
                  echo "<p>Ad Type: ".$row['ad_type']."</p>";
                    echo "<p><a href='deletepost.php?AdId=".$row['ad_id']."' target='_self'>Delete</a></p>";

            echo "</div>";
        echo "</div>";
          
    }
  echo "</div>";



  ?> 


  <!-- Pagination -->

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Maruf & Fahmida</a></p>
</footer>

</body>
</html>
