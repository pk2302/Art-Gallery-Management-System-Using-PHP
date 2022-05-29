<?php

include "db.php";

if(isset($_POST['submit_e']))
{
	header('location:header.php');
}

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 


$sql = "SELECT * FROM painting ,painting_details where painting.p_id=painting_details.p_id order by painting.p_id asc"; 
$result = $mysqli->query($sql); 
$mysqli->close(); 

?>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
*{
	font-family: cursive;

	}
table, th, td {
  border: 1px solid black;
  align-items: center;
  font-family: cursive;
}

th, td {
  padding-right: 40px;
  padding-left: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
}

table{
	margin-left: 60px;
}

th{
	background-color: #B2A29E;
}
td{
	background-color: #E0DAD8;
}

	.add_ex{

		margin-left: 10px;
		margin-right: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
		border: solid black;
		background-color: #ACB6B6;
	}
</style>
<form method="POST">
<body style="background-image: url('art.jpg');">
	<div class="heading"><hr>
		<h2 align=center style="font-size: 40px;">INVINCIBLE ART GALLERY</h2><hr>
		
	</div>
<div class="add_ex" id="ex1">
	<h2 align=center style="text-decoration: underline;" > PAINTING DATA</h2>
	<hr><br>
	<table>
			<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Artist ID</th>
			<th>Year</th>
			<th>Cost</th>
			<th>URL</th>
			<th>Type</th>

			
			
		</tr>

<?php 	
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
		<tr>
				<td><?php echo $rows['p_id'];?></td>
				<td><?php echo $rows['title'];?></td> 
				<td><?php echo $rows['aid'];?></td> 
				<td><?php echo $rows['year'];?></td> 
				<td><?php echo $rows['cost'];?></td> 
				<td><?php echo $rows['url'];?></td>
				<td><?php echo $rows['type'];?></td> 

				
		</tr>
		<?php 
				} 
			?>
		</table>

   <input type="submit" name="submit_e" value="BACK" style="padding-bottom: 10px;padding-top: 10px;padding-right: 40px;padding-left: 40px;margin-top: 20px;margin-left: 50px;margin-bottom: 50px;border-style: double;border-color: white;color:white;background-color: black">

   
</div>

</body>
<form>
</html>