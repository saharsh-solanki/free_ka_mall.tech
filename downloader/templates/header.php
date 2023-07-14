<?php 
//for better redit=rection 
$protocol="https://";
$host=$_SERVER['HTTP_HOST'];
$servername="";
$both=$protocol.$host.$servername;
$yturl="#";
?>
<!DOCTYPE html>
<html>
<head>
   <title>Paytm Badshah</title>
   <link rel="icon" href="logo.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
	<script src="https://kit.fontawesome.com/673a9f6eb5.js" crossorigin="anonymous"></script>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
      #a1{
        color:black;
      }
      #a1:hover{
        color: gray;
      }
    </style>
</head>
<body>
	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  

  <!-- Navbar menu  -->

<nav  class="navbar fixed-top navbar-expand-lg  navbar-dark bg-dark ">
      
        <a class="navbar-brand" href="index.php"><img src="https://gdurl.com/JIx8/download" style="border-radius:40px;height: 45px; width: 45px;"/></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo $both ?>"><i style="font-size:15px;color:white;" class="fa fa-home"></i> Home<span class="sr-only">(current)</span></a>
            </li>
       <li>
         <a style="color: white;" class="nav-link" href="<?php echo $both ?>/offer.php"><i style="font-size:15px;color:white;" class="fa fa-money"></i>  offers</a>
       </li>

        <li>
         <a style="color: white;" class="nav-link" href="<?php echo $both ?>/giveaway.php"><i style="font-size:15px;color:white;" class="fa fa-gift"></i> Give-Away</a>
       </li>
          
        <li class="nav-item dropdown">
              <a style="color: white;" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size:15px;color:white;" class="fa fa-tools"></i> Tools</a>
              <div  class="dropdown-menu" aria-labelledby="dropdown07">
                 <a id="a1"  class="nav-link" href="<?php echo $both ?>/os">Online Script</a>
                   <a id="a1"  class="nav-link" href="<?php echo $both ?>/sms-bomber">SMS-BOMBER</a>
                   <a id="a1"  class="nav-link" href="<?php echo $yturl; ?>">YouTube-Video-Downloder</a>
                   <a id="a1" class="nav-link" href="<?php echo $both ?>/call-bomber">CALL BOMBER</a>
                   <a id="a1" class="nav-link" href="<?php echo $both ?>/com-soon.php">Create Bomber</a>
              </div>
            </li>
 
         <li class="nav-item dropdown">
              <a style="color: white;" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More</a>
              <div  class="dropdown-menu" aria-labelledby="dropdown07">
                   <a id="a1" class="nav-link" href="<?php echo $both ?>/contact-us.php">Contact-Us</a>
                  <a id="a1" class="nav-link" href="<?php echo $both ?>/love99">Fun Time</a>
                   <a id="a1" class="nav-link" href="<?php echo $both ?>/user/login.php">Login</a>
                   <a id="a1" class="nav-link" href="<?php echo $both ?>/user/register.php">Register</a>
              </div>
            </li>
  
          </ul>

           
  <form class="form-inline" action="<?php echo $both; ?>/view-offer.php">
    <input class="form-control mr-sm-2" name="offer_name" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> 
          </div>

<!--Serch box -->
 
<!--account button-->
    
    
    
    </nav><br><br><br>

    

</body>
</html>