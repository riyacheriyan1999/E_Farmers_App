<?php
error_reporting(0);
$status=$_REQUEST['status'];
if ($status == "logout")
{
    session_start();
    session_unset();
    session_destroy();
}
?>
<?php
include("../common/menu.php");
	
?>


    <style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
</style>

<style>
#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#FFECF4;
padding:10px;	
}


#right
{
	
float:right;	
color:#333;
font-size:12px;
}
.userd
{
color:#333;	
}
.red
{
background:#F36;
padding:10px;	
}
.table
{
margin-bottom:10px;
background:#E6F4FF;	
}
.sep
{
height:30px;
background:#666;	
}
</style>
    <!--    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />-->

    <!-- Animation library for notifications   -->
  <!--  <link href="../assets/css/animate.min.css" rel="stylesheet"/>-->

    <!--  Light Bootstrap Table core CSS    -->
    <!--<link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>-->


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
<link href="../common/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                                             
                            </div>
                            <div class="content all-icons">
                                <div class="row">
                                
                                
                               
                                     <?php
							if($_SESSION['type']=="admin")
							{
							?>        
                            
                             <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../location/form.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="LOCATION">
                                    </div></a>
                                  </div>             
                                
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../product/select.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="PRODUCTS">
                                    </div></a>
                                  </div>
                                                     
                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../consumer/select.php">    <div class="font-icon-detail"><i class="pe-7s-study"></i>
                                      <input type="text" value="CONSUMER">
                                    </div></a>
                                  </div>
                                                        
                               
                                   <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../customer/select.php">    <div class="font-icon-detail"><i class="pe-7s-note2"></i>
                                      <input type="text" value="CUSTOMER">
                                    </div></a>
                                  </div>
                            
                                      
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../employee/form.php">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="EMPLOYEE">
                                    </div></a>
                                  </div> 
                                                         
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../feedback/select.php">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="FEEDBACK">
                                    </div></a>
                                  </div> 
                                                         
                                 
                                                          
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../sale/select.php">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="SALES">
                                    </div></a>
                                  </div> 
                                 
                               
                               
                                
                           
                                <?php
							}
							if($_SESSION['type']=="customer")
							{
								?>
                                         
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../customer/update.php?id=<?php echo $_SESSION['userid']; ?>">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="Profile">
                                    </div></a>
                                  </div> 
                                
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../product/form.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="PRODUCTS">
                                    </div></a>
                                  </div>
                                  
                                                    
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../feedback/form.php">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="FEEDBACK">
                                    </div></a>
                                  </div> 
                                            
                                  
                                <?php
							}
							if($_SESSION['type']=="employee")
							{
								?>
                                         
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../employee/update.php?id=<?php echo $_SESSION['userid']; ?>">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="Profile">
                                    </div></a>
                                  </div> 
                                
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../assign_employe/select.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="Assign Work">
                                    </div></a>
                                  </div>
     
                                <?php
							}
							
							if($_SESSION['type']=="consumer")
							{
								?>
                                         
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../consumer/update.php?id=<?php echo $_SESSION['userid']; ?>">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="Profile">
                                    </div></a>
                                  </div> 
                                
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../product/form.php">    <div class="font-icon-detail"><i class="pe-7s-upload"></i>
                                      <input type="text" value="PRODUCTS">
                                    </div></a>
                                  </div>
                                  
                                                          
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../feedback/form.php">    <div class="font-icon-detail"><i class="pe-7s-male"></i>
                                      <input type="text" value="FEEDBACK">
                                    </div></a>
                                  </div> 
                                
                                
                                   <?php
							}
							?>
                                
                              <!--  
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../station/form.php">    <div class="font-icon-detail"><i class="pe-7s-note2"></i>
                                      <input type="text" value="Station">
                                    </div></a>
                                  </div>
                                
                                
                                
                                 <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../booking/select.php">    <div class="font-icon-detail"><i class="pe-7s-note2"></i>
                                      <input type="text" value="Booking">
                                    </div></a>
                                  </div>
                               
                              -->
                                
                                 
                                  
                                  
                          
                                </div>


                            </div>
                        </div>
                    </div>

                </div>



                
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                <p class="copyright pull-right">
                   
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	

</html>
