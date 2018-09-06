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
  <div class="w3-container w3-panel w3-black w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-36">Categories</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Family House</div>
        <?php 
        $CategoryFamily="Family House";
         echo "<a href='MainAdvertise.php?category=".$CategoryFamily."' target='_self'><img src='add1.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Bachelore House</div>
        <?php 
        $CategoryBachelore="Bachelore House";
         echo "<a href='MainAdvertise.php?category=".$CategoryBachelore."' target='_self'><img src='add2.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Sublet House</div>
        <?php 
        $CategorySublet="Sublet House";
         echo "<a href='MainAdvertise.php?category=".$CategorySublet."' target='_self'><img src='add3.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Male Hostel</div>
        <?php 
        $CategoryMale="Male Hostel";
         echo "<a href='MainAdvertise.php?category=".$CategoryMale."' target='_self'><img src='add1.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Female Hostel</div>
        <?php 
        $CategoryFemale="Female Hostel";
         echo "<a href='MainAdvertise.php?category=".$CategoryFemale."' target='_self'><img src='add2.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Commercial Space</div>
        <?php 
        $CategoryCommercial="Commercial Space";
         echo "<a href='MainAdvertise.php?category=".$CategoryCommercial."' target='_self'><img src='add3.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Hotel</div>
        <?php 
        $CategoryHotel="Hotel";
         echo "<a href='MainAdvertise.php?category=".$CategoryHotel."' target='_self'><img src='add2.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Others</div>
        <?php 
        $CategoryOthers="Others";
         echo "<a href='MainAdvertise.php?category=".$CategoryOthers."' target='_self'><img src='add1.jpg' alt='House' style='width:100%'></a>";
        ?>
      </div>
    </div>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Maruf & Fahmida</a></p>
</footer>

</body>
</html>
