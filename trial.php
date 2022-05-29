<?php
 include "db.php";

 if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 
if(isset($_GET['back_a']))
{
	header('location:header.php');
}

$sum="";


if(isset($_POST['cal'])){
	
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$sum=$no1+$no2;

}

if(isset($_POST['submit_c'])){

$cb_id=$_POST['cb_id'];
$c_name;
$pb_id=$_POST['pb_id'];
$b_date=$_POST['b_date'];

$no2=$_POST['no2'];
$total;
$query="SELECT cost from painting where p_id='".$pb_id."'";
$result7 = $mysqli->query($query); 
while($row = $result7->fetch_assoc()) {
        $no1= $row["cost"];
    }

$r="SELECT name from customer where c_id='".$cb_id."'";
$result8 = $mysqli->query($r); 

	while($row2 = $result8->fetch_assoc()) {
        $c_name= $row2["name"];

    }

	

	$total=$sum;


	$w1="INSERT INTO bill(c_id,c_name,e_date,price,d_charge,total) values ('".$cb_id."','".$c_name."','".$b_date."','".$no1."','".$no2."','".$total."')";

	$w2="INSERT INTO bill_details(b_id,p_id)values('".$b_id."','".$pb_id."')";


	$result = $mysqli->query($w1); 
	$result2 = $mysqli->query($w2); 


	if($result==true && $result2==true)
	{

		echo "<script>alert('Data Updated Successfully!')</script>";
		echo '<script>alert("Bill ID: '.$b_id.'\nCustomer_ID: '.$cb_id.'\nCustomer Name: '.$c_name.'\nPainting ID: '.$pb_id.'\nDate: '.$b_date.'\nPrice: '.$no1.'\nDelivery Charge: '.$no2.'\nTotal Amount: '.$total.'")</script>';
		//header('location:display.php');
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
<form method="POST" action="p.php">
<body style="background-color: #ACB6B6;">
	<div class="heading"><hr>
		<h2 align=center style="font-size: 40px;">INVINCIBLE ART GALLERY</h2><hr>
		<div class="abcd">

		</div>
	</div>
<div class="add_ex" id="ex1" style="background-color: black">
	<h2 align=center style="text-decoration: underline;color:white;" >CUSTOMER BILL</h2>

   		

      <input type="text" name="cb_id" placeholder="Customer ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

            <input type="text" name="pb_id" placeholder="Painting ID" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

      <input type="date" name="b_date" style="padding-bottom: 10px;padding-top: 10px;padding-right: 110px;padding-left: 40px;margin-top: 20px;margin-left: 130px;">

	 
<input type="text" name="no2" name="no2" id="no2" placeholder="Delivery Charge" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 130px;"><br>
<!--                                                                               -->

   <input type="submit" name="submit_c" value="GENERATE BILL" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 175px;margin-bottom: 20px;border-style: double;border-color: white;color:white;background-color: black">
   
</div>
<script type="text/javascript">
	function openback(){
  location.href = "header.php";
 }


</script>
</body>
</form>
</html>