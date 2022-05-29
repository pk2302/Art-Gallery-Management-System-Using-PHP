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


$p_id=$_POST['a'];
$value=$_POST['m'];
$new_val=$_POST['h'];

$query="SELECT * FROM painting WHERE p_id='".$p_id."'";
$result2=$mysqli->query($query);
$count=mysqli_num_rows($result2);

if($value=='Painting ID'){
	$w1="UPDATE painting SET p_id='".$new_val."' WHERE p_id='".$p_id."'";
	$result = $mysqli->query($w1);

	$w0="UPDATE artist_details SET painting_id='".$new_val."' WHERE painting_id='".$p_id."'";
	$result0 = $mysqli->query($w0);

	$w11="UPDATE painting_details SET p_id='".$new_val."' WHERE p_id='".$p_id."'";
	$result11 = $mysqli->query($w11);
}
else if($value=='Title')
{
	$w2="UPDATE painting SET title='".$new_val."' WHERE p_id='".$p_id."'";
	$result6 = $mysqli->query($w2); 
}

else if($value=='Artist ID')
{
	$w3="UPDATE painting SET aid='".$new_val."' WHERE p_id='".$p_id."'";
	$result3 = $mysqli->query($w3);

	$w9="UPDATE artist_details SET artist_id='".$new_val."' WHERE painting_id='".$p_id."'";
	$result9 = $mysqli->query($w9);

}
else if($value=='Year')
{
	$w4="UPDATE painting SET year='".$new_val."' WHERE p_id='".$p_id."'";
	$result4 = $mysqli->query($w4); 
}

else if($value=='Cost')
{
	$w5="UPDATE painting SET cost='".$new_val."' WHERE p_id='".$p_id."'";
	$result5 = $mysqli->query($w5); 
}

else if($value=='URL')
{
	$w5="UPDATE painting SET url='".$new_val."' WHERE p_id='".$p_id."'";
	$result5 = $mysqli->query($w5); 
}

else if($value=='Type')
{
	$w5="UPDATE painting_details SET type='".$new_val."' WHERE p_id='".$p_id."'";
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
		alert("Invalid Painting ID!!!");
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
	<h2 align=center style="text-decoration: underline;color:white;" >UPDATE PAINTING DATA</h2>

	<input type="text" name="a" placeholder="Painting ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

   		<select name="m" class="required" id="m" style="padding-bottom: 10px;padding-top: 10px;padding-right: 130px;padding-left: 40px;margin-top: 20px;margin-left: 130px;"required>
		<option >----Select----</option>
		<option >Painting ID</option>
		<option >Title</option>
		<option >Artist ID</option>
		<option >Year</option>
		<option >Cost</option>
		<option >URL</option>
		<option >Type</option>

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