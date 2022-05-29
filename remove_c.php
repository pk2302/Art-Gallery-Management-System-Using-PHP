<?php
 //include "header.html";
?>
<?php 
include "db.php";

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 



if(isset($_POST['submit_e'])){

	$c_id=$_POST['c_id'];

	$query="SELECT * FROM customer WHERE c_id='".$c_id."'";
	$result3=$mysqli->query($query);
	$count=mysqli_num_rows($result3);

	$w1 = "DELETE FROM customer where c_id='".$c_id."'";
	$w2 = "DELETE FROM customer_details where c_id='".$c_id."'";
	$result = $mysqli->query($w1); 
	$result2 = $mysqli->query($w2);

if($count>0){
			
			?>
			<html>
		<body>
		<script>
		alert("  Data Removed Successfully !!!");
		</script>
	</body>
	</html><?php
					}
		else{?>
			<html>
		<body>
		<script>
		alert("Invalid Customer ID!!!");
		</script>
	</body>
	</html>
		<?php
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
		margin-top: 50px;
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
	<h2 align=center style="text-decoration: underline;color:white;" >DELETE CUSTOMER DATA</h2>
   		<input type="text" name="c_id" placeholder="Customer ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 10px;margin-left: 130px;" required>

<button class="tablinks3" onclick="openback()" style="padding-right: 65px;padding-left: 40px;padding-bottom: 10px;padding-top: 10px;margin-left: 80px;margin-bottom: 10px;font-family: cursive;border-style: double;border-color: white;color:white;background-color: black" ><i class="fa-solid fa-backward" style="color:white; padding-right: 10px;"></i>BACK</button>

   <input type="submit" name="submit_e" value="DELETE DATA" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 50px;margin-bottom: 50px;border-style: double;border-color: white;color:white;background-color: black">

   
</div>
<script type="text/javascript">
	function openback(){
  location.href = "header.php";
 }
</script>
</body>
</form>
</html>