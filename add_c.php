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

$c_id=$_POST['c_id'];
$name=$_POST['name'];
$ph_no=$_POST['ph_no'];
$c_email=$_POST['c_email'];
$gender=$_POST['gender'];

$w1 = "INSERT INTO customer(c_id,name,email,gender)values ('".$c_id."','".$name."','".$c_email."','".$gender."') "; 
$w2 = "INSERT INTO customer_details(c_id,ph_no)values ('".$c_id."','".$ph_no."') "; 

if($w1==true && $w2==true)
{

	echo "<script>alert('Data added Successfully' )</script>";
}
else
{
		echo "<script>alert('Add Valid Data')</script>";
}
$result = $mysqli->query($w1); 
$result2 = $mysqli->query($w2); 

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
	<h2 align=center style="text-decoration: underline;color:white;" >ADD CUSTOMER DATA</h2>
   		<input type="text" name="c_id" placeholder="Customer ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-left: 130px;" required>

      <input type="text" name="name" placeholder="Name" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required>

      <input type="tel" name="ph_no" placeholder="Contact Number" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" pattern="[789][0-9]{9}" required>

      <input type="email" name="c_email" placeholder="Email" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required>

       <p style="color:white;margin-left: 130px;">Gender</p>
      <input type="radio" id="m1" name="gender" value="Female" style="color:white;margin-left: 130px;">
    <label style="color:white">Female</label><br>
    <input type="radio" id="m2" name="gender" value="Male" style="color:white;margin-left: 130px;">
    <label style="color:white">Male</label><br>
    <input type="radio" id="m3"name="gender" value="Other" style="color:white;margin-left: 130px;">
    <label style="color:white">Other</label><br>

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