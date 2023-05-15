<?php
session_start();

    include("connection.php");
    include("functions.php");

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Komyut Dashboard</title>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="demo--container">
  
  <div class="directions">
    
    <div class="directions__basics">
      
      <div class="directions__basics--header">
        
        <div class="directions--menu">
          <a href="#">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <iframe src="Background/index.html" frameborder="0" scrolling="no"style="position:fixed; top:0; left:0; width:100%; height:100%; z-index:-1;"></iframe>
        <div class="transportation--type">
          <a href="#" class="sign">
            <i><img src="Background/jeepney.png" alt=""style="width: 20px; height: auto;"></i>
          </a>
          <a href="#" class="bus">
            <i class="fa fa-bus"></i>
          </a>
          <a href="#" class="train">
            <i class="fa fa-train"></i>
          </a>
          <a href="#" class="walking">
            <i class="fa fa-male"></i>
          </a>
          </a>
        </div>
        
        <div class="directions--close">
          <a href="#">
            <i class="fa fa-times"></i>
          </a>
        </div>
        
      </div>
      
      <div class="directions__basics--address">
        
        <div class="path--icon">
        </div>
        
        <div class="inputs">
          
          <div class="row">
            
<!-- Starting Point -->
<div class="col-xs-12">
  <div class="form-group">
    <input type="text" class="form-control" id="address-one" placeholder="Choose starting point" value="">
  </div>
</div>
<!-- / -->
        
<!-- Destination -->
<div class="col-xs-12">
  <div class="form-group">
    <input type="text" class="form-control" id="address-two" placeholder="Choose destination" value="">
  </div>
</div>
            
          </div>
          
        </div>
        
        <div class="toggle">
          <a href="#">
            <i class="fa fa-sort"></i>
          </a>
        </div>
        
      </div>
      
    </div>
    
    <div class="directions__options">
      
      <div class="add">
        <a href="#">
          <i class="fa fa-plus-circle"></i>
        </a>
      </div>
      
      <div class="leave">
        <a href="#">
          Leave now
          <i class="fa fa-sort-desc"></i>
        </a>
      </div>
      
      <div class="options">
        <a href="#">
          Options
        </a>
      </div>
      
    </div>
    
    <div class="directions__routes">
      
      <!-- Route One -->
      <div class="route">
        
        <div class="route__type">
          <i><img src="Background/jeepney.png" alt=""style="width: 20px; height: auto;"></i>
        </div>
        
        <div class="route__details">
          <div class="via">
            via Welcome Rotonda
            <p></p>
            Project 8 Munoz - Quiapo, Kalaw
          </div>
          <div class="usual--time">
            50 min without traffic
          </div>
          <div class="details">
            <a href="#">Details</a>
          </div>
        </div>
        
        <div class="route__time">
          <div class="time">PHP 25</div>
          <div class="distance">11 miles</div>
        </div>
        
      </div>
      <!-- / -->
      
      <!-- Route Two -->
      <div class="route">
        <div class="route__type">
          <i class="fa fa-bus"></i>
        </div>
        
        <div class="route__details">
          <div class="via">
            via Fishermall
            <p></p>
            PTEX - Fairview
          </div>
          <div class="usual--time">
            30 min without traffic
          </div>
          <div class="details">
            <a href="#">Details</a>
          </div>
        </div>
        
        <div class="route__time">
          <div class="time">PHP 50</div>
          <div class="distance">11 miles</div>
        </div>
        
      </div>
      <!-- / -->
      
      <!-- Route Three -->
      <div class="route">
        
        <div class="route__type">
          <i class="fa fa-train"></i>
        </div>
        
        <div class="route__details">
          <div class="via">
            via Roosevelt Station
          </div>
          <div class="usual--time">
            25 mins
          </div>
          <div class="details">
            <a href="#">Details</a>
          </div>
        </div>
        
        <div class="route__time">
          <div class="time">PHP 48</div>
          <div class="distance">9.1 miles</div>
        </div>
        
      </div>
      <a class="btn" href="\Nuxt App with Login and Redirect\LANDING PAGE FINAL!\dist\index.php" title="Dashboard">Logout</a>
      <!-- / -->
    </div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script>
  const addressOneInput = document.getElementById("address-one");
  const addressTwoInput = document.getElementById("address-two");
  
  addressOneInput.addEventListener('keyup', (e) => {
    e.preventDefault();
    if(e.keyCode === 13){
      //Testing
      //console.log(e.target.value)

      var addressOneValue = e.target.value;

      console.log('Start: ' + addressOneValue);
      localStorage.setItem('addressOneValueTransfer', addressOneValue);
      location.reload();
    }
  });



  addressTwoInput.addEventListener('keyup', (e) => {
    e.preventDefault();
    if(e.keyCode === 13){
      //Testing
      //console.log(e.target.value)

      var addressTwoValue = e.target.value;

      console.log('Destination: ' + addressTwoValue);
      localStorage.setItem('addressTwoValueTransfer', addressTwoValue);
      location.reload();      

    }
  });
</script>

</body>
</html>
