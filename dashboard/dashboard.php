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
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

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
                                <a href="../krishibavan/select.php">    <div class="font-icon-detail">
								
								<img src='2.png' width='150px' height='150px'>
                                      <input type="text" value="Krishibavan">
                                    </div></a>
                                  </div>
								          
                                                             
                                                   
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../farmer/select.php">    <div class="font-icon-detail">
								
									<img src='0.jpg' width='150px' height='150px'>
                                      <input type="text" value="Farmer">
                                    </div></a>
                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../category/select.php">    <div class="font-icon-detail">
								
											<img src='3.png' width='150px' height='150px'>
                                      <input type="text" value="Category">
                                    </div></a>
                                  </div>
                                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../location/select.php">    <div class="font-icon-detail">
								
								            <img src='4.jpg' width='150px' height='150px'>
                                      <input type="text" value="Location">
                                    </div></a>
                                  </div>
								  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../news/select.php">    <div class="font-icon-detail">
								
								            <img src='5.png' width='150px' height='150px'>
                                      <input type="text" value="Blog">
                                    </div></a>
                                  </div>
                                   
                                  <?php
								 }
								 else
								 {
									 ?>
                                      <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../client/update.php?id='<?php echo $_SESSION['userid'];?>'">    <div class="font-icon-detail"><i class="pe-7s-cart"></i>
                                      <input type="text" value="Profile">
                                    </div></a>
                                  </div>
                                     <?php
								 }
								 ?>
                                  
                                
                                  
                                  
                                <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../item/select.php">    <div class="font-icon-detail">
								
								            <img src='6.jpg' width='150px' height='150px'>
                                      <input type="text" value="Item">
                                    </div></a>
                                  </div>
                                        
                                
                              
                                  
                               <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                <a href="../sales/select.php">    <div class="font-icon-detail">
								
								            <img src='7.jpg' width='150px' height='150px'>
                                      <input type="text" value="Sales">
                                    </div></a>
                                  </div>
                                     
                                  
                                  
                                  
                                  
                                
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
