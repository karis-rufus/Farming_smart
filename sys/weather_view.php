<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AgriBoost | Dashboard </title>
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
     <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.min.css">
<!--===============================================================================================-->
</head>
    <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php  include_once ('page-headers.php'); ?>
            <div class="line"></div>
            <div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header deveops-cj">All Weather Forecasted</p>    
            <div class="card-body">
              <div id="tabs-4"><table class="table table-striped thead-dark table-bordered table-hover" id="mbugua">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Region</th>
                    <th class="text-center">Temp</th>
                    <th class="text-center">Conditioning</th>
                    
                    <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                    <?php
                     $a=1;
                    $query=mysqli_query($db,"select *from `forecasting` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                          <tr>
                            <td class="text-center"><?php echo $a;?></td> 
                            <td class="text-center"><?php echo $row['date_t'];?></td> 
                            <td class="text-center"><?php echo $row['region'];?></td>   
                            <td class="text-center"><?php echo $row['tempa'];?></td>
                            <td class="text-center"><?php echo $row['daily'];?></td>
                           
                             <td class="text-center">    
                  <a href="weather_view.php?edited=1&idx=<?php echo $row['id']; ?>"  class="btn btn-danger"><span class="fa fa-trash"></span></a>
                              </td>  
                          </tr>
                          <?php
                       
                            $a++;
                      }
                                          
                       if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $db->prepare("DELETE FROM forecasting WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-warning " >
                   <?php echo'Record Successfully Deleted';?></div>
                   <script>
                       setTimeout(function () {
                        window.location.href = "weather_view.php";
                        }, 5000); 
                      
                    </script>
            
                    <?php
                          }
                          

                      }
                
                      ?>
                </table> </div>
            </div>
            </div>    
            </div>
           
            </div>
             <div class="line"></div>
                 <footer>
            <p class="text-center sm-system">
            &copy; copyright @  <?php echo date('Y');?> by <span>Mr. Charles Jeckton</span>  |  All rights reserved!   
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
    <script src="../vendor/DataTables/datatables.min.js"></script> 
        <script>
    $(document).ready( function () {
    $('#mbugua').DataTable();
           
    } );
        </script>
       
   
</body>
</html>