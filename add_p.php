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

$p_id=$_POST['p_id'];
$p_name=$_POST['p_name'];
$a_id=$_POST['a_id'];
$year=$_POST['year'];
$cost=$_POST['cost'];
$url=$_POST['url'];
$type=$_POST['type'];


$w1 = "INSERT INTO painting(p_id,title,aid,year,cost,url)values ('".$p_id."','".$p_name."','".$a_id."','".$year."','".$cost."','".$url."') "; 
$w2 = "INSERT INTO painting_details(p_id,type)values ('".$p_id."','".$type."') "; 

$w3 = "INSERT INTO artist_details(painting_id,artist_id)values ('".$p_id."','".$a_id."') "; 

$result = $mysqli->query($w1); 
$result2 = $mysqli->query($w2); 
$result3 = $mysqli->query($w3); 

if($w1==true && $w2==true && $w3==true)
{

	echo "<script>alert('Data added Successfully')</script>";
}
else
{
		echo "<script>alert('Add Valid Data')</script>";
}

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
	
	<h2 align=center style="text-decoration: underline;color:white;" >ADD PAINTING DATA</h2>
   		<input type="text" name="p_id" placeholder="Painting ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-left: 130px;" required>

      <input type="text" name="p_name" placeholder="Title" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required>

      <input type="text" name="a_id" placeholder="Artist ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-left: 130px;" required>

      <input type="number" name="year" placeholder="Year" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required>

      <input type="number" name="cost" placeholder="Cost" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required>

      <input type="text" name="url" placeholder="URL" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

      <input type="text" name="type" placeholder="Type" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required><br>
   
<button class="tablinks3" onclick="openback()" style="padding-right: 65px;padding-left: 40px;padding-bottom: 10px;padding-top: 10px;margin-left: 80px;margin-bottom: 10px;font-family: cursive;border-style: double;border-color: white;color:white;background-color: black" ><i class="fa-solid fa-backward" style="color:white; padding-right: 10px;"></i>BACK</button>

   <input type="submit" name="submit_e" value="ADD DATA" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 50px;margin-bottom: 50px;border-style: double;border-color: white;color:white;background-color: black">

   
</div>

<script type="text/javascript">
	function openback(){
  location.href = "header.php";
 }
</script>
</body>
</form>
</html>