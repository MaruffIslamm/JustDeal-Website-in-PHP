<?php
include_once 'dbMySql.php';
$con = new DB_con();

  $adid = $_GET['AdId'];
  $result = $con->DeleteAdvertiseUsingId($adid);  
  if($result)
  {
    ?>
    <script>
    alert('Delete Successfull...');
        window.location='MyAdvertisements.php'
        </script>
    <?php

  }
  else
  {
    ?>
    <script>
    alert('Delete failed...');
        window.location='MyAdvertisements.php'
        </script>
    <?php
  }  
?>