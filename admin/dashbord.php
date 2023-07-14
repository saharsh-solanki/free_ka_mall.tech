<?php 
session_start();
if(isset($_SESSION['un'])){

}
else{
  header('location:login.php');
}
?>
<html>
<head>
 
</head>
<body>
	
	
<?php include('header.php'); ?>
</body>
</html>