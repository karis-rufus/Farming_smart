<?php require_once('../zvinodiwa/database.php');?>
<?php
                            if(isset($db,$_POST['submit'])){
                            $name = mysqli_real_escape_string($db,$_POST['name']);
                          
                            $username = mysqli_real_escape_string($db,$_POST['username']);
                            $password = mysqli_real_escape_string($db,$_POST['password']);
                            $phone = mysqli_real_escape_string($db,$_POST['phone']);
                            $region = mysqli_real_escape_string($db,$_POST['region']);         
                            $joined_date = date('Y-m-d');
                            $sql_e = "SELECT * FROM farmers WHERE phone ='$phone'";
                            $res_e = mysqli_query($db, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                            ?>
                             <div class="alert alert-danger  animated shake" >
                       <?php echo'Sorry the phone is already registered';?></div>
                        <?php    
                       }else{      
                  
                $sql = "INSERT INTO farmers(name,username,password,phone,region,joined_date)VALUES('$name','$username','$password','$phone','$region','$joined_date')";
                $results = mysqli_query($db,$sql);
                        
                        
                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success  animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for succesfull registration ';?></div>
                        <?php
                            error_reporting(0);
                            $username = 'samstrover';
                            $token = 'e14916d71b35f236e25a3fe9fc8c4449';
                            $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';
                            $destinations = $phone;
                            $message = "Hello $name thank you for subscribing to our services. You will receive updates of weather, pest control methods";

                            $ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
                            $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
                            $ws_response = @file_get_contents($ws_str); 

                          }else{
                                ?>
                         <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Error! </strong><?php echo'OPPS something went wrong';?></div>
                        <?php    
                          }      
                      }
                 }

                
                ?>    

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Smart Farm System Login</title>
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>

<div class="line"></div>
        <div class="row">
            <div class="col-md-12 ssm">
                <div class="card">
                    <p class="card-header deveops-cj">Add Details </p>
                    <div class="card-body">
                        <form action="register.php" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Full Name:</label>
                                    <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" pattern="[0-0]{1,1}[7-7]{1,1}[1-9]{2,2}[0-9]{6,6}" maxlength="20"  required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Region</label>
                                    <select class="form-control" name="region">
                                        <option>Nairobi</option>
                                        <option>Nyanza</option>
                                        <option>Upper Rift-Valley</option>
                                        <option>Lower Rift-Valley</option>
                                        <option>Central</option>
                                        <option>Coast</option>
                                        <option>Western</option>--------------
                                        <option>North Eastern</option>
                                    </select>
                                </div>-
                                <div class="col-md-6 form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20"  required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" maxlength="20" placeholder="" required>
                                </div>
                              
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <button type="submit" name="submit" class="btn btn-success btn-block"><span class="fa fa-check"></span> Submit</button>
                                </div>
                                <div class="col-md-6 form-group">
                                    <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span><a href="userlog.php"> Cancel</a></button>
                                </div>
                            </div>
                        </form>
                        <p>Have An Account? <a href="userlog.php">login</a> </P>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <footer>
            <p class="text-center sm-system">
                &copy; <?php echo date('Y'); ?> by <span>Mr. Rufus</span> | All rights reserved!
            </p>
        </footer>
        <div class="line"></div>
    </div>

	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="vvendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>