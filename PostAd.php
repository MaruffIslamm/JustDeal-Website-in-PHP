<?php
// Start the session
session_start();
 
if(empty($_SESSION["UserName"]))
{
  header("Location: /project-1/index.php");
}
else
{
  include_once 'dbMySql.php';
  $con = new DB_con();
  // data insert code starts here.   
  if(isset($_POST['submit']))
  {
    //extract($_POST);
    //$filename = $_POST['UploadImage'];
    $username = $_SESSION["UserName"];
    $adtitle = $_POST['AdTitle'];
    $adtype = $_POST['SelectAdType'];
    $category = $_POST['SelectCategory'];
    $maxpeople = $_POST['MaxPeople'];
    $bathroom = $_POST['Bathroom'];
    $bedroom = $_POST['Bedroom'];
    $checkin = $_POST['CheckIn']; 
    $checkout = $_POST['CheckOut'];
    $extrainfo = $_POST['ExtraInfo'];     



    $shower = $_POST['Shower'];
    $wifi = $_POST['Wifi'];
    $tv = $_POST['Tv'];
    $kitchen = $_POST['Kitchen']; 
    $ac = $_POST['Ac'];
    $access = $_POST['Accessible'];  


    $UploadedFileName=$_FILES['Photo1']['name'];
    //$UploadedFileName2=$_FILES['Photo2']['name'];

      $upload_directory = "MyUploadImages/"; //This is the folder which you created just now
      $TargetPath1=time().$UploadedFileName;
      //$TargetPath2=time().$UploadedFileName2;
      move_uploaded_file($_FILES['Photo1']['tmp_name'], $upload_directory.$TargetPath1);
        
        $lastfilename1= $upload_directory.$TargetPath1;
        //$lastfilename2= $upload_directory.$TargetPath2;      

        $res = $con->insertPostWithImage($username,$adtitle,$adtype,$category,$maxpeople,$bathroom,$bedroom,$checkin,$checkout,$extrainfo,$lastfilename1,$shower,$wifi,$tv,$kitchen,$ac,$access); 
        echo ".$shower.";
        
        if($res==true)
        {
          ?>
            <script>
            alert('Successfull...');
            window.location='PostAd.php'
            </script>
          <?php
        }
        else if($res==false)
        {
          ?>
            <script>
            alert('error...');
            window.location='PostAd.php'
            </script>
          <?php
        }       
      
        // Write Mysql Query Here to insert this $QueryInsertFile
                 
  } 
}  

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
      <a href="Index.php" class="w3-bar-item w3-button">Home</a>
      <a href="User.php" class="w3-bar-item w3-button">My Panel</a>
      <a href="PostAd.php" class="w3-bar-item w3-button">Post a New Ad</a>
      <a href="UserLogout.php" class="w3-bar-item w3-button"><?php echo $_SESSION["UserName"].",";?>Logout</a>        
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <div class="w3-container w3-padding-32" >
    <h2 class="w3-border-bottom w3-border-black w3-padding-16">Welcome to Advertise posting panel</h2>
    <form class="w3-container w3-card-5" method="POST" action="PostAd.php" enctype="multipart/form-data">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Ad Title" name="AdTitle" required="">

      <select class="w3-select" name="SelectAdType" required="">
        <option  value="">Select Your Advertise Type</option>
        <option value="Rent">Rent</option>
        <option value="Sell">Sell</option>
      </select>

      <select class="w3-select" name="SelectCategory" required="">
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
      
      <h4 class="w3-border-bottom w3-border-black">The Space</h4>
      <input class="w3-input w3-section w3-border" type="number" placeholder="Max People" name="MaxPeople" required="">
      <input class="w3-input w3-section w3-border" type="number" placeholder="Bathroom" name="Bathroom" required="">
      <input class="w3-input w3-section w3-border" type="number" placeholder="Bedroom" name="Bedroom" required="">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Check In Time" name="CheckIn">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Check Out Time" name="CheckOut">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Extra Info" name="ExtraInfo">

      <label>Shower-></label>Yes<input class="w3-radio" type="radio" name="Shower" value="Yes" checked>
      No<input class="w3-radio" type="radio" name="Shower" value="No">

      <label>Wifi-></label>Yes<input class="w3-radio" type="radio" name="Wifi" value="Yes" checked>
      No<input class="w3-radio" type="radio" name="Wifi" value="No">

      <label>TV-></label><input class="w3-radio" type="radio" name="Tv" value="Yes" checked>
      No<input class="w3-radio" type="radio" name="Tv" value="No">

      <label>Kitchen-></label><input class="w3-radio" type="radio" name="Kitchen" value="Yes" checked>
      No<input class="w3-radio" type="radio" name="Kitchen" value="No">

      <label>AC-></label><input class="w3-radio" type="radio" name="Ac" value="Yes" checked>
      No<input class="w3-radio" type="radio" name="Ac" value="No">

      <label>Accessible-></label><input class="w3-radio" type="radio" name="Accessible" value="Yes" checked>
      No<input class="w3-radio" type="radio" name="Accessible" value="No">

      <h4 class="w3-border-bottom w3-border-black">Upload Photos</h4>
      <label>Photo 1:</label><input type='file' name='Photo1' required=""><br>
      <h4 class="w3-border-bottom w3-border-black"></h4>

      <button class="w3-button w3-black w3-section" type="submit" value="submit" name="submit">
        <i class="fa fa-paper-plane"></i> Post Ad
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
