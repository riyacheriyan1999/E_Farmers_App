
<?php
include("../header_inner.php");
include("table.php");

$k=0;

?><!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
<!--<style>
div
{
text-transform:capitalize;
margin-bottom:5px;	
}

</style>-->
<?php

include("data_validation.php");
include("../connection.php");

$g=0;

$result = mysqli_query($con,"SHOW FIELDS FROM $table");

$i = 0;

echo "<div class='col-sm-12'>";
echo "<h2>$title</h2>";
echo "<form action='insert.php' method='post' enctype='multipart/form-data' name='register_form' id='register_form'>";
while ($row = mysqli_fetch_array($result))
 {

  $name=$row['Field'];
  $type=$row['Type'];
  $type = explode("(", $type);
  $type_only=$type[0];
$i++;

$g++;


//echo " <div ><div >";



if($i==1 )
{
	
	//echo "<td>Male <input type='radio' name='$name'> </td>";
	
}elseif($name=="district")
{

   echo "
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  
	   $sql2 = "select *  from district ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
echo "<select name='$name' class='form-control'>";
    
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<option value='$row2[id]'>$row2[name]</option>";
	}
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
}
elseif($i==60)
{
	$query="SELECT * FROM staff ORDER BY id DESC LIMIT 1";
		$result5 = mysqli_query($con,$query);
		$row5=mysqli_fetch_array($result5);
		$userid=$row5['id'];
		if($userid==0)
		 {
		$userid=1;
		 }
		 else
		 {
			  $userid=$userid+1;
		 }
		 $username="STAFF-".$userid;
		 
		 
		 echo "
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label><input type='text' name='$name' class='form-control' value='$username' readonly> </div>
                                        </div>";
	
		 
}
elseif($i==50 )
  {
	  echo "
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  

echo "<select name='$name' class='form-control'>";
    echo "<option >------------SELECT GENDER---------------</option>";
	echo "<option >Male</option>";
	echo "<option >Female</option>";
	echo "<option >Others</option>";
	
   
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
    
  }
  

 elseif($i==16 )
  {
	  echo "
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>";
	  
	  

echo "<select name='$name' class='form-control'>";
    echo "<option >CURRENTLY WORKING</option>";
	echo "<option >CURRENTLY NON-WORKING</option>";
   
	  echo "</select>";
	    
	  echo "</div>
                                        </div>";
	
    
  }
  
  
  

 elseif($i==40 )
  {
	
	  $date=date("Y-m-d");
	  
	  $t="t".$k;
	  echo "
	  
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='text' name='$name'  class='form-control' value='$date' id='$t' required ></div></div>";
	   ?>
	  
	    <script type="text/javascript">
$(function() {
	$('#t<?php echo $k;?>').datepick({
		
	dateFormat:"dd-mm-yyyy",
	minDate:new Date('1980-01-01'),
	maxDate: new Date('2000-01-01')
		
	}
	
	);
	
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
      <?php
	  $k++;
    
  }
  elseif($i==15 )
  {
	
	  $date=date("Y-m-d");
	  
	  $t="t".$k;
	  echo "
	  
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='text' name='$name'  class='form-control' value='$date' id='$t' required ></div></div>";
	   ?>
	  
	    <script type="text/javascript">
$(function() {
	$('#t<?php echo $k;?>').datepick({
		
	dateFormat:"dd-mm-yyyy",
	minDate:new Date('2018-01-01'),
	maxDate: new Date('2020-01-01')
		
	}
	
	);
	
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
      <?php
	  $k++;
    
  }

else
{

  if($type_only=="varchar" || $type_only=="int" || $type_only=="int" || $type_only=="tinyint" )
  {
	  echo "
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label><input type='text' name='$name'class='form-control' > </div>
                                        </div>";
	
      
    
  }
  
  
   if($type_only=="date" )
  {
	  $date=date("Y-m-d");
	  echo "
	  
	  
	  
	  <div class='col-md-5'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='date' name='$name'  class='form-control' value='$date' max='$date'></div></div>";
	  
	 
  }
  
  
  
  if($type_only=="tinytext" )
  {
	  echo "
	  
	  	  
	  <div class='col-md-10'>
                                            <div class='form-group'><label>
	  
	  ".str_replace('_', ' ', $name)."</label>
	  
	  <input type='file' name='$name' class='form-control'></div></div>";
  }
  if($type_only=="text" )
  {
	  echo "<div class='col-md-10'>
                                            <div class='form-group'><label>
											
											 ".str_replace('_', ' ', $name)."</label>
											
											<textarea name='$name'  class='form-control' rows='8'></textarea>
											</div>
											</div>";
  }
  
  
  

}
  


//echo "</div></div><br>";

  
 
 
 
 
 
  
}



echo "
<div class='col-md-12'>
                              <div class='col-md-3'>              <div class='form-group'>
											<input type='submit' value='Submit' name='submit' class='form-control btn-success'>";



echo "</form>";



echo "
</div></div><div class='col-md-3'>   <div class='form-group'>
<form action='select.php' method='post'><input type='submit' name='view' value='View All' class='form-control btn-danger'></form></div></div>
<div class='clearfix'></div>

</div>
";



mysqli_free_result($result);










echo "</div>



<div class='clearfix'></div>


";






mysqli_close($con);

include("../footer_inner.php");

?>
   <div id="sample">
 <!-- <script type="text/javascript" src="nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->