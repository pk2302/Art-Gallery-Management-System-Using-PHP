<?php

include "db.php";

if(isset($_POST['submit_e']))
{
	header('location:header.php');
}

if ($mysqli->connect_error) { 
	die('Connect Error (' .	$mysqli->connect_errno . ') '.$mysqli->connect_error); 
} 


$sql = "SELECT distinct * FROM artist ,artist_details,artist_info where artist.artist_id=artist_details.artist_id and artist.artist_id=artist_info.artist_id order by artist.artist_id asc"; 
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
  padding-right: 50px;
  padding-left: 50px;
  padding-top: 10px;
  padding-bottom: 10px;
}

table{
	margin-left: 75px;
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
	<h2 align=center style="text-decoration: underline;" > ARTIST DATA</h2>
	<hr><br>
	<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Email-ID</th>
			<th>Contact Number</th>
			<th>Painting-ID</th>
			
			
		</tr>

<?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
		<tr>
				<td><?php echo $rows['artist_id'];?></td>
				<td><?php echo $rows['artist_name'];?></td> 
				<td><?php echo $rows['gender'];?></td> 
				<td><?php echo $rows['email_id'];?></td> 
				<td><?php echo $rows['phone_no'];?></td> 
				<td><?php echo $rows['painting_id'];?></td> 
				
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