<?php
session_start(); // Start the session

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Handle the case where the username is not set (e.g., redirect to login page)
    // Example:
    header("Location: userlog.php");
    exit(); // Stop further script execution
}
?>

<?php require_once('../zvinodiwa/database.php');
require_once('../sys/retrive.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SmartFarm | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
    <?php  include_once ('../include/page-headers.php');
    
     ?>
        <!-- Sidebar  -->

            <div class="row">


 <div class="col-md-4">
      <div class="card-counter success">
        <i class="fa fa-info"></i>
        <span class="count-numbers"><?php echo $jeckton1;?></span>
        <span class="count-name">Pest Control Tips</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card-counter danger">
        <i class="fa fa-thermometer-half"></i>
        <span class="count-numbers"><?php echo $jeckton2;?></span>
        <span class="count-name">Weather</span>
      </div>
    </div>
    <div class="col-md-4 mt-4">
      <div class="card-counter success">
      <i class="fa fa-product-hunt" ></i>
        <span class="count-numbers"><?php echo $jeckton3;?></span>
        <span class="count-name">Farm Inputs</span>
      </div>
    </div>
    
    


            </div>
           <?php require('../sys/weather.php');?>
            <div class="line"></div>

             <div class="line"></div>
                <footer>
            <p class="text-center sm-sys">
            &copy; copyright @  <?php echo date('Y');?> by <span>Mr. Rufus kariuki</span>  |  All rights reserved!  
            </p>
            </footer>
           <div class="line"></div> 

        </div>
    </div>



<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../vendor/Jquery-ui/jquery-ui.min.js"></script>

</body>
</html>