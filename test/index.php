<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="redirect.php">
	<input type="text" name="mobno" placeholder="ENTER NUMBER"><br>
	<input type="text" name="count" placeholder="ENTER COUNT"><br>
	<input type="text" name="sent" value="1" hidden=""><br>
	<input type="radio" name="speed" value="slow">SLOW <br>
	<input type="radio" name="speed" value="fast">Fast <br>
	<input type="submit" name="submit">
</form>
<?php if(isset($_REQUEST['msg'])){ ?>
<center><div style="height: 50px;width: 40rem;border-radius:20px;background:#00F306;color: black;font-size: 32px;border:2px dotted red;padding-top: 8px;font-family: Yu Gothic;"><?php echo $_REQUEST['msg'];?></div></center>
<?php } ?>
</body>
</html>
