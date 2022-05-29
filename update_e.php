<?php
 include "db.php";

if(isset($_POST['back_a']))
{
	header('location:header.php');
}

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 

if(isset($_POST['submit_e'])){


$e_id=$_POST['a'];
$value=$_POST['m'];
$new_val=$_POST['h'];

$query="SELECT * FROM exhibition WHERE e_id='".$e_id."'";
$result2=$mysqli->query($query);
$count=mysqli_num_rows($result2);

if($value=='Exhibition ID'){
	$w1="UPDATE exhibition SET e_id='".$new_val."' WHERE e_id='".$e_id."'"; 
	$result = $mysqli->query($w1);

	$w11="UPDATE exhibition_details SET e_id='".$new_val."' WHERE e_id='".$e_id."'"; 
	$result11 = $mysqli->query($w11);
}
else if($value=='Exhibition Name')
{
	$w2="UPDATE exhibition SET name='".$new_val."' WHERE e_id='".$e_id."'";
	$result6 = $mysqli->query($w2); 
}

else if($value=='Mode of Exhibition')
{
	$w3="UPDATE exhibition_details SET ph_no='".$new_val."' WHERE e_id='".$e_id."'";
	$result3 = $mysqli->query($w3);
}
else if($value=='Location')
{
	$w4="UPDATE exhibition_details SET email='".$new_val."' WHERE e_id='".$e_id."'";
	$result4 = $mysqli->query($w4); 
}


 	if($count>0){
			
			?>
			<html>
		<body>
		<script>
		alert("  Updated Successfully !!!");
		</script>
	</body>
	</html><?php
					}
		else{?>
			<html>
		<body>
		<script>
		alert("Invalid Exhibition ID!!!");
		</script>
	</body>
	</html>
		<?php
	}


?>		
	<?php
	$mysqli->close(); 
	}

?>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
*{
	font-family: cursive;

	}
body{
	background-image:url("art.jpg");
}
	.add_ex{
		margin-left: 400px;
		margin-right: 400px;
		margin-top: 10px;
		margin-bottom: 100px;
		border: solid black;
		
	}
</style>
<form method="POST">
<body style="background-color: #ACB6B6;">
	<div class="heading"><hr>
		<h2 align=center style="font-size: 40px;">INVINCIBLE ART GALLERY</h2><hr>
	
	</div>
<div class="add_ex" id="ex1" style="background-color: black">
	<h2 align=center style="text-decoration: underline;color:white;" >UPDATE EXHIBITION DATA</h2>

	<input type="text" name="a" placeholder="Exhibition ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

   		<select name="m" class="required" id="m" style="padding-bottom: 10px;padding-top: 10px;padding-right: 95px;padding-left: 40px;margin-top: 20px;margin-left: 130px;"required>
		<option >----Select----</option>
		<option >Exhibition ID</option>
		<option >Exhibition Name</option>
		<option >Mode of Exhibition</option>
		<option >Location</option>
		
		</select>

		<input type="text" name="h" placeholder="Enter new data" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">
		<br>

<input type="submit" name="back_a" value="BACK" style="padding-right: 65px;padding-left: 40px;padding-bottom: 10px;padding-top: 10px;margin-left: 80px;margin-bottom: 10px;border-style: double;border-color: white;color:white;background-color: black" >

   <input type="submit" name="submit_e" value="UPDATE DATA" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 50px;margin-bottom: 50px;border-style: double;border-color: white;color:white;background-color: black">

   
</div>
<script type="text/javascript">
	function openback(){
  location.href = "header.php";
 }

</script>
</body>
</form>
</html>