
<html>
<head>
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
<body style="background: #f3f3f3;">
	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
  <!-- Navbar menu  -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
        <a class="navbar-brand" href="../index.php"style="font-size: 30px;" >PB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashbord.jsp"><i  class="fa fa-home"></i> Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-offer.php">Add-offer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-offer.php">View-Articles</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="add-giveaway.php">Add Giveaway</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-user.php">View-User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-giveaway.php">View-giveaway</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="send-notification.php">Send-Notification</a>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View-Query</a>
              <div  class="dropdown-menu" aria-labelledby="dropdown07">
                   <a id="a1" class="nav-link" href="view-query.php">Un-Solved Query</a>
                   <a id="a1" class="nav-link" href="view-solve-query.php">Solved Query</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-os.php">add online Script</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
          </div>
</nav>
   <?php if(isset($_GET['msg'])){ ?>
<!--display When then payment is success-->
<div style="margin:20px;" class="alert alert-success">
  <div class="alert-heading">
   Message
  </div>
  <hr>
 <?php echo $_GET['msg']; ?>
</div>
<?php } ?>

</body>
</html>