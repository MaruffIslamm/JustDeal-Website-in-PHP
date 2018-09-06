
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
      <a href="Login.php" class="w3-bar-item w3-button">Login/Register</a>
      <a href="About.html" class="w3-bar-item w3-button">About Us</a>           
    </div>
  </div>
</div>


<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <div class="w3-container w3-panel w3-black w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-36">All Advertise</h3>
  </div>
  <form class="w3-container w3-card-5" action="SearchMainAdvertise.php" target="" method="GET">
      <select class="w3-select" name="SelectAdType">
        <option  value="">Select Advertise Type</option>
        <option value="Rent">Rent</option>
        <option value="Sell">Sell</option>
      </select>
      <select class="w3-select" name="SelectCategory">
        <option value="">Select Your Category</option>
        <option value="Family House">Family House</option>
        <option value="Bachelor House">Bachelor House</option>
        <option value="Sublet House">Sublet House</option>
        <option value="Male Hostel">Male Hostel</option>
        <option value="Female Hostel">Female Hostel</option>
        <option value="Commercial Space">Commercial Space</option>
        <option value="Hotel">Hotel</option>
        <option value="Others">Others</option>
      </select>       
      <button class="w3-button w3-black w3-section" type="submit" value="show" name="show">
        <i class="fa fa-paper-plane"></i> Show
      </button>  
    </form>    
 <!-- First Photo Grid-->
  <?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.

$category = $_GET['category'];

  $result = $con->selectPostedAd($category);  
  echo "<div class='w3-row-padding'>";
    while ($row = mysqli_fetch_array($result)) {      
        echo "<div class='w3-third w3-container w3-margin-bottom'>";
          echo "<a href='Advertise.php?id=".$row['ad_id']."' target='_self'><img src='".$row['image_1']."' alt='Photo1' style='width:100%' class='w3-hover-opacity'></a>";
            echo "<div class='w3-container w3-white'>";
              echo "<p><b>".$row['ad_title']."</b></p>";
              echo "<p><b>Ad For: ".$row['ad_type']."</b></p>";
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
