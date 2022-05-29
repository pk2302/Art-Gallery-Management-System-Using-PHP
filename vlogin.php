<?php
  
  if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    //echo $username ,$password;
    if($username=="admin" && $password=="admin@2302"){
      header('location:header.php');
    }
    else{
      echo "<script>alert('Invalid username or password')</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <form method="POST">
  <body>
    <div class="nav">
      
      <h1 class="h1" style="font-family: cursive;">THE INVINCIBLE GALAXY</h1>
      <br><hr>
      
    </div>

    <div class="mainbox">
      <div class="box1">
        <img
          src="https://cutewallpaper.org/21/epic-wolf-wallpaper/3459-galaxy-wolf-wallpaper.jpg"
          alt=""
        />
      </div>
      <div class="box2">
        <h2 style="color:white">Login</h2>
        <form action="">
          <p>
            <input
              type="text"
              name="username"
              placeholder="Username" style="opacity: 0.7; background-color: white; padding: 12px;
    width: 50%;
    
    /* border: 2px solid white; */
    border-radius: 15px;
   
    box-shadow: 8px 5px 11px white;"
            />
          </p>
          <p>
            <input
              type="password"
              name="password"
              placeholder="Password" style="opacity: 0.7; background-color: white;"
            />
          </p>
          <p><input type="submit" name="submit" value="LOGIN" /></p>
        </form>
       <br>
      
      </div>
    </div>
    <div class="reviews">
      <br>
      <br>
      <div class="furniture">
        <div class="box3" style="background-image: url('a2.jpg');background-size: cover;background-repeat: no-repeat;">
          
          
          
        </div>
        <div class="box4" style="background-image: url('a4.jpg');background-size:auto;">
          
        </div>
        <div class="box5" style="background-image: url('a5.webp');background-size:cover;background-repeat: no-repeat;">
          
        </div>
      </div>
    </div>

    <div class="work">
      <div class="work1" style="background-image: url('a6.jpg');background-size:cover;">
        
      </div>
      <div class="work2">
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/_JKuKGyppVY"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    <div></div>

  </body>
</form>
</html>
