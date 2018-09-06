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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-36">Advertise</h3>
  </div>
  <?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
$adid = $_GET['id'];

  $result = $con->selectPostedAdWithId($adid);  
  echo "<div class='w3-row-padding w3-margin-top'>";
    while ($row = mysqli_fetch_array($result)) {      
        echo "<div class='w3-half'>";
          echo "<div class='w3-card'>";
            echo "<img src='".$row['image_1']."' alt='Photo1' style='width:100%'>";
              echo "<div class='w3-container'>";
                echo "<h5>".$row['ad_title']."</h5>";
              echo "</div>";
          echo "</div>";
        echo "</div>";

        echo "<div class='w3-container'>";
          echo "<h4><strong> Ad For: </strong>".$row['ad_type']."</h4>";
            echo "<div class='w3-row w3-large'>";
              echo "<div class='w3-container'>";
                echo "<div class='w3-col s6'>";
                  echo "<p><i class='fa fa-fw fa-male'></i> Max people: ".$row['max_people']."</p>";
                  echo "<p><i class='fa fa-fw fa-male'></i> Bathrooms: ".$row['bathroom']."</p>";
                  echo "<p><i class='fa fa-fw fa-male'></i> Bedrooms: ".$row['bedroom']."</p>";
                echo "</div>";
                echo "<div class='w3-col s6'>";
                  echo "<p><i class='fa fa-fw fa-clock-o'></i> Check In: ".$row['checkin']."</p>";
                  echo "<p><i class='fa fa-fw fa-clock-o'></i> Check Out: ".$row['checkout']."</p>";
                echo "</div>";
              echo "</div>";

              echo "<hr>";

              echo "<h4><strong>Amenities</strong></h4>";
              echo "<div class='w3-row w3-large'>";
                echo "<div class='w3-col s6'>";
                  echo "<p><i class='fa fa-fw fa-shower'></i> Shower: ".$row['shower']."</p>";
                  echo "<p><i class='fa fa-fw fa-wifi'></i> WiFi: ".$row['wifi']."</p>";
                  echo "<p><i class='fa fa-fw fa-tv'></i> TV: ".$row['tv']."</p>";
                echo "</div>";
                echo "<div class='w3-col s6'>";
                  echo "<p><i class='fa fa-fw fa-cutlery'></i> Kitchen: ".$row['kitchen']."</p>";
                  echo "<p><i class='fa fa-fw fa-thermometer'></i> AC: ".$row['ac']."</p>";
                  echo "<p><i class='fa fa-fw fa-wheelchair'></i> Accessible: ".$row['access']."</p>";
                echo "</div>";
              echo "</div>";
              echo "<hr>";

              echo "<h4><strong> Extra Info </strong></h4>";
              echo "<p>".$row['extra_info']."</p>";
              echo "<hr>";
          echo "</div>";
            echo "<hr>";
        echo "</div>";
          
    }
  echo "</div>";
  ?> 



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Maruf & Fahmida</a></p>
</footer>

</body>
</html>
