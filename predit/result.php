<?php


include("table.php");
include("../header_inner.php");

$del_id=0;
$i=0;


		  include("../connection.php");
	
		
	$result = mysqli_query($con,"SELECT * FROM $table WHERE id='$_REQUEST[id]' ");
		  
	
	$row = mysqli_fetch_array($result);


$head="season,pH,soil_type,elevation,temperature";
$data="$row[season],$row[ph],$row[soil_type],$row[elevation],$row[temperature]";

$myfile="test.csv";
$fh=fopen($myfile,'w') or die('canot open file');
$str="$head\n$data";
fwrite($fh,$str);
fclose($fh);


echo"<h2>RESULT </h2><br>";
$python=`python test.py`;
echo"<h4>$python </h4><br><br>";

$re=explode("#",$python);


//echo "images/$re[0].jpg";

if($re[0]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[0].jpg' width='250px' /> </div>";
}

if($re[1]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[1].jpg' width='250px' /></div>";
}
if($re[2]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[2].jpg' width='250px' /> </div>";
}
if($re[3]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[3].jpg' width='250px' /> </div>";
}
if($re[4]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[4].jpg' width='250px' /> </div>";
}
if($re[5]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[5].jpg' width='250px' /> </div>";
}
if($re[6]!="")
{
	echo"<div class='col-md-6'><img src='images/$re[6].jpg' width='250px' /> </div>";
}


//header("location:index1.php");



?>
