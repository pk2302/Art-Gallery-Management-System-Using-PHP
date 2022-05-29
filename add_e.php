<?php 
include "db.php";

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 

if(isset($_POST['submit_e'])){

$e_id=$_POST['ex_id'];
$e_name=$_POST['ex_name'];
$e_sdate=$_POST['ex_sdate'];
$e_edate=$_POST['ex_edate'];
$e_mode=$_POST['m'];
$e_location=$_POST['ex_location'];

$w1 = "INSERT INTO exhibition(e_id,e_name,start_date,end_date)values ('".$e_id."','".$e_name."','".$e_sdate."','".$e_edate."') "; 
$w2 = "INSERT INTO exhibition_details(e_id,mode,location)values ('".$e_id."','".$e_mode."','".$e_location."') "; 

if($w1==true && $w2==true)
{

	echo "<script>alert('Data added Successfully')</script>";
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
		<div class="abcd">

		</div>
	</div>
<div class="add_ex" id="ex1" style="background-color: black">
	<h2 align=center style="text-decoration: underline;color:white;" >ADD EXHIBITION DATA</h2>
   		<input type="text" name="ex_id" placeholder="Exhibition ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-left: 130px;" required>

      <input type="text" name="ex_name" placeholder="Exhibition Name" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required>

		<p style="color:white;margin-left: 130px;">Start Date</p>
      <input type="date" name="ex_sdate" placeholder="Start Date" style="padding-bottom: 10px;padding-top: 10px;padding-right: 109px;padding-left: 40px;margin-left: 130px;" required>

      <p style="color:white;margin-left: 130px;">End Date</p>
      <input type="date" name="ex_edate" placeholder="End Date" style="padding-bottom: 10px;padding-top: 10px;padding-right: 109px;padding-left: 40px;margin-left: 130px;" required>

      <select name="m" class="required" id="m" style="padding-bottom: 10px;padding-top: 10px;padding-right: 110px;padding-left: 40px;margin-top: 20px;margin-left: 130px;"required>
		<option >--Select Mode--</option>
		<option >Online</option>
		<option >Offline</option>
	</select>
     
      <input type="text" name="ex_location" placeholder="Location" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;" required><br>
   
<button class="tablinks3" onclick="openback()" style="padding-right: 65px;padding-left: 40px;padding-bottom: 10px;padding-top: 10px;margin-left: 80px;margin-bottom: 10px;font-family: cursive;border-style: double;border-color: white;color:white;background-color: black" ><i class="fa-solid fa-backward" style="color:white; padding-right: 10px;"></i>BACK</button>

   <input type="submit" name="submit_e" value="ADD DATA" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 50px;margin-bottom: 50px;border-style: double;border-color: white;color:white;background-color: black">

   
</div>
<script type="text/javascript">
	function openback(){
  location.href = "header.php";
 }

 function Validate() {
        var m = document.getElementById("m");

        if (m.value == "--Select Mode--") {
           
            alert("Please select Mode of Exhibition!");
            return false;
        }
        
        return true;
    }
</script>
</body>
</form>
</html>