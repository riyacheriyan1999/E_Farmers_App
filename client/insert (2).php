<?php
include("../connection.php");
include("table.php");


$result = mysqli_query($con,"SHOW FIELDS FROM $table");
$i = 0;
while ($row = mysqli_fetch_array($result))
 {
 // echo $row['Field'] . ' ' . $row['Type']."<br>";
  $name=$row['Field'];
  //echo $name."<br>";
  $post_values[]=addslashes($_POST[$name]);
  $field_name[]=$name;
  $data_type[]=$row['Type'];
 // echo $post_values[$i];
  $i++;
 }
$j=$i;
//echo "<br>";
for($k=0;$k<$i;$k++)
{
	if($fields=="")
	$fields=$field_name[$k];
	else
	$fields=$fields.",".$field_name[$k];
	
	
	$type=$data_type[$k];
	//$data_type[$k];
	$type = explode("(", $type);
  $type_only=$type[0];
	
	

  if($type_only=='tinytext')
  {
	

$date=date("Y-m-d-h-i-s");
$target_path = $target_path.$date.basename($_FILES[$field_name[$k]]['name']); 
$target_path2 = $date.basename($_FILES[$field_name[$k]]['name']); 
//echo $target_path;
move_uploaded_file($_FILES[$field_name[$k]]['tmp_name'], $target_path);





	if($datas=="")
	{
	$datas="'".$target_path2."'";
	//echo $field_name[$k];
	}
	else
	{
	$datas=$datas.",'".$target_path2."'";
//	echo $field_name[$k];
	}
	
  }
  
  elseif($type_only=='date')
  {
	$var=$post_values[$k];
		  $date2=date("Y-m-d",strtotime($var));
	
	
	if($datas=="")
	$datas="'".$date2."'";
	else
	$datas=$datas.",'".$date2."'";
  }
  else
	 {
	if($datas=="")
	$datas="'".$post_values[$k]."'";
	else
	$datas=$datas.",'".$post_values[$k]."'";
	
  }
}
//echo $datas;

$sql="INSERT INTO $table($fields) VALUES ($datas)" ;

if (mysqli_query($con, $sql)) {
	//$userid=mysqli_insert_id($con);
 //mysqli_query($con,"insert into login (userid,username,password,type) values('$userid','$_POST[username]','$_POST[password]','staff')");
   header("location:form.php?a=1");
} else {
	
	?>
    <script>
   alert("<?php echo "Error: " . mysqli_error($con);  ?>")
</script>
<?php

 header("location:form.php?a=1");
}

?>
