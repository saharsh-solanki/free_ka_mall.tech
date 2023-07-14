<?php 
     include('dbcon.php');
     $offerid=$_GET['offerid'];
     $query="SELECT * FROM `offer` WHERE `url`='$offerid'";
     $run=mysqli_query($con,$query);
     if ($run == TRUE) {
     	$data=mysqli_fetch_assoc($run);
     	
     ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../logo.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Averia+Libre:wght@300&family=IM+Fell+Great+Primer&family=IM+Fell+Great+Primer+SC&family=Yeon+Sung&display=swap" rel="stylesheet">
	<title><?php echo $data['offername']; ?></title>
	    <style>
.detailBox {
    float: center;
    border:1px solid #bbb;
    
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
    </style>
</head>
<body style="font-family: 'IM Fell Great Primer', serif;">

	<?php include('header.php'); ?>
	<div style="font-family: 'IM Fell Great Primer SC', serif;" class="p-3 mb-2 bg-success text-white h4">
 <center><?php echo $data['offername']; ?></center>
</div>
<center>
<div style="font-family: 'Averia Libre', cursive;background:linear-gradient(to right top , orange,white,green);height:50px;color:black;font-size:28px;margin-top:-7px;">
 <i style="color:gray;" class="fa fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;<marquee style="width:60%;"><?php echo $data['tittle']; ?></marquee>&nbsp;&nbsp;&nbsp;<i style="color:gray;" class="fa fa-hand-point-left"></i></center>
</div></center>
<br>

<?php $dis=$data['offerdis'];
echo str_replace("(sic);","'",$dis); ?>


<center>
     <script type="text/javascript">(function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@paytmbadshah";document.getElementsByTagName("head")[0].appendChild(script);})();</script> <a href="tg://resolve?domain=paytmbadshah" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse"
style="font-size:18px;max-width:300px;background:#27A5E7;box-shadow:1px 1px 5px #27A5E7;color:#ffffff;border-radius:50px;" title="Join Now"><i></i> Join Paytm Badshah telegram<small><span class="telegramim_count" data-for="@paytmbadshah">...</span> Subscriber</small></a> <br>


<div class="card text-white bg-dark mb-3" style="width: 80%;">
  <div class="card-body">
    <h5> Created By : - Paytm Badshah </h5>
  </div>
</div></center><br>

<!--- Start of comment Section --->

<div  class="detailBox" style="width: 90%;margin: auto;">
    <div class="titleBox">
      <label>Leave A comment</label>
       
    </div>
    <div class="commentBox">
        
        <p class="taskDescription">Enter Comment Like Your Problem , any Suggetion or anything.</p>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <?php 
            $cmtid=$_REQUEST['offerid'];
     include('dbcon.php');
     $query="SELECT * FROM `comment` WHERE `offerid`='$cmtid'";
     $run=mysqli_query($con,$query);
     $row=mysqli_num_rows($run);
     if($row<1){ ?>
     <span>No Reply Till now</span>
  <?php }//end of if
 
 else{
 $i=1;
  while($data=mysqli_fetch_assoc($run)) { ?> 
            <li>
                <div class="commenterImage">
                  <span style="color: blue;font-size: 38px;"><i class="fa fa-user"></i></span>
                </div>
                <div class="commentText">
                    <p class=""><?php echo $data['comment']; ?></p> <span class="date sub-text">on <?php echo $data['date']; ?></span>  </div>
            </li>
            <?php  }
   } ?>
        </ul><br>
        <form class="form-inline" action="../cmt-con.php" role="form">
            <div class="form-input">
                <input style="width: 98%;" name="comment" class="form-control" type="text" placeholder="Your comments" />
            </div><br>
           <input type="hidden" name="offerid" value="<?php echo $cmtid; ?>"><br>
                <button class="btn btn-info" name="cmt">Submit</button>
           
        </form>
    </div>
</div>
<!--end of comment section --->
<?php } ?><br><br>

<center>
<?php include('rel-offer.php'); ?></center>
<?php include('footer.php'); ?>

</body>
</html>

