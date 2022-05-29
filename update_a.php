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


$a_id=$_POST['a'];
$value=$_POST['m'];
$new_val=$_POST['h'];

$query="SELECT * FROM artist WHERE artist_id='".$a_id."'";
$result2=$mysqli->query($query);
$count=mysqli_num_rows($result2);

if($value=='Artist ID'){
	$w1="UPDATE artist SET artist_id='".$new_val."' WHERE artist_id='".$a_id."'"; 
	$result = $mysqli->query($w1);
}
else if($value=='Artist Name')
{
	$w2="UPDATE artist SET artist_name='".$new_val."' WHERE artist_id='".$a_id."'"; 
	$result6 = $mysqli->query($w2); 
}

else if($value=='Contact Number')
{
	$w3="UPDATE artist_info SET phone_no='".$new_val."' WHERE artist_id='".$a_id."'"; 
	$result3 = $mysqli->query($w3);
}
else if($value=='Email ID')
{
	$w4="UPDATE artist SET email_id='".$new_val."' WHERE artist_id='".$a_id."'"; 
	$result4 = $mysqli->query($w4); 
}

else if($value=='Gender')
{
	$w5="UPDATE artist SET gender='".$new_val."' WHERE artist_id='".$a_id."'"; 
	$result5 = $mysqli->query($w5); 
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
		alert("Invalid Artist ID!!!");
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
	<h2 align=center style="text-decoration: underline;color:white;" >UPDATE ARTIST DATA</h2>

	<input type="text" name="a" placeholder="Artist ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

   		<select name="m" class="required" id="m" style="padding-bottom: 10px;padding-top: 10px;padding-right: 110px;padding-left: 40px;margin-top: 20px;margin-left: 130px;"required>
		<option >----Select----</option>
		<option >Artist ID</option>
		<option >Artist Name</option>
		<option >Contact Number</option>
		<option >Email ID</option>
		<option >Gender</option>
		</select>

		<input type="text" name="h" placeholder="Enter new data" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">
		<br>

<input type="submit" name="back_a" value="BACK" style="padding-right: 65px;padding-left: 40px;padding-bottom: 10px;padding-top: 10px;margin-left: 80px;margin-bottom: 10px;font-family: cursive;border-style: double;border-color: white;color:white;background-color: black" >

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