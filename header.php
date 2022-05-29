

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
body {
	font-family: cursive;
	background-image:url("art.jpg");

}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: black;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #6493F9;
  color:black;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #6493F9;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>

<h2 align=center style="font-size: 40px;">INVINCIBLE ART GALLERY</h2>


<div class="tab">
	
  <button class="tablinks" onclick="openData(event, 'exhibitionn')" style="color:white;">
<i class="fa-solid fa-warehouse" style="padding-right: 13px;" ></i><b>EXHIBITION DATA</b></button>
  <button class="tablinks" onclick="openData(event, 'artist')" style="color:white;"><b><i class="fa-solid fa-palette" style="padding-right: 13px;" ></i>ARTIST DATA</b></button>
  <button class="tablinks" onclick="openData(event, 'painting')" style="color:white;"><i class="fa-solid fa-paintbrush" style="padding-right: 10px;"></i ><b>PAINTING DATA</b></button>
  <button class="tablinks" onclick="openData(event, 'customer')" style="color:white;"><i class="fa-solid fa-user-large" style="padding-right: 13px;"></i><b>CUSTOMER DATA</b></button>
</div>

<div id="exhibitionn" class="tabcontent">
  <h3 align="center" style="text-decoration: underline;">EXHIBITION DATA</h3>
  <br>

  <button class="tablinks2" onclick="openAddE()" style="padding-right: 65px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-circle-plus" style="padding-right: 10px;"></i>ADD DATA</button><br><br>

 <button class="tablinks2" onclick="openUpE()" style="padding-right: 40px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-pen-to-square" style="padding-right: 10px;"></i>UPDATE DATA</button><br><br>


  
 <button class="tablinks2" onclick="openViewE()" style="padding-right: 55px;padding-left: 25px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-eye" style="padding-right: 10px;"></i>VIEW DATA</button><br><br>

 
</div>

<div id="artist" class="tabcontent">
  <h3 align="center" style="text-decoration: underline;">ARTIST DATA</h3>
 	<br>
  <button class="tablinks2" onclick="openAddA()" style="padding-right: 65px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-circle-plus" style="padding-right: 10px;"></i>ADD DATA</button><br><br>

 <button class="tablinks2" onclick="openUpA()" style="padding-right: 40px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-pen-to-square" style="padding-right: 10px;"></i>UPDATE DATA</button><br><br>


 
 <button class="tablinks2" onclick="openViewA()" style="padding-right: 55px;padding-left: 25px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-eye" style="padding-right: 10px;"></i>VIEW DATA</button><br><br>

</div>

<div id="painting" class="tabcontent">
  <h3 align="center" style="text-decoration: underline;">PAINTING DATA</h3>
 	<br>
  <button class="tablinks2" onclick="openAddP()" style="padding-right: 65px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-circle-plus" style="padding-right: 10px;"></i>ADD DATA</button><br><br>

 <button class="tablinks2" onclick="openUpP()" style="padding-right: 40px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-pen-to-square" style="padding-right: 10px;"></i>UPDATE DATA</button><br><br>


 

 <button class="tablinks2" onclick="openViewP()" style="padding-right: 55px;padding-left: 25px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-eye" style="padding-right: 10px;"></i>VIEW DATA</button><br><br>

  
</div>

<div id="customer" class="tabcontent">
  <h3 align="center" style="text-decoration: underline;">CUSTOMER DATA</h3>
 	<br>
  <button class="tablinks2" onclick="openAddC()" style="padding-right: 65px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-circle-plus" style="padding-right: 10px;"></i>ADD DATA</button><br><br>

 <button class="tablinks2" onclick="openUpC()" style="padding-right: 40px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-pen-to-square" style="padding-right: 10px;"></i>UPDATE DATA</button><br><br>


  

 <button class="tablinks2" onclick="openViewC()" style="padding-right: 55px;padding-left: 25px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-eye" style="padding-right: 10px;"></i>VIEW DATA</button><br><br>

 <button class="tablinks2" onclick="openBill()" style="padding-right: 25px;padding-left: 25px;padding-bottom: 10px;padding-top: 10px;background-color: black;margin-left: 560px;font-family: cursive;font-size: 15px;font-weight: bold;color:white;" ><i class="fa-solid fa-eye" style="padding-right: 10px;"></i>GENERATE BILL</button><br><br>

</div>

<script>

 function openAddE(){
  location.href = "add_e.php";
 }

 function openUpE(){
  location.href = "update_e.php";
 }

 function openRemE(){
  location.href = "remove_e.php";
 }

 function openViewE(){
  location.href = "view_e.php";
 }


 function openAddA(){
  location.href = "add_a.php";
 }

 function openUpA(){
  location.href = "update_a.php";
 }

 function openRemA(){
  location.href = "remove_a.php";
 }

 function openViewA(){
  location.href = "view_a.php";
 }


function openAddP(){
  location.href = "add_p.php";
 }

 function openUpP(){
  location.href = "update_p.php";
 }

 function openRemP(){
  location.href = "remove_p.php";
 }

 function openViewP(){
  location.href = "view_p.php";
 }

 function openAddC(){
  location.href = "add_c.php";
 }

 function openUpC(){
  location.href = "update_c.php";
 }

 function openRemC(){
  location.href = "remove_c.php";
 }

 function openViewC(){
  location.href = "view_c.php";
 }

 function openBill(){
  location.href = "trial.php";
 }

function openData(evt, selection) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(selection).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
  
</body>
</html> 
