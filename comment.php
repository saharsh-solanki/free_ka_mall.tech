<!DOCTYPE html>
<html>
<head>
    <title></title>
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
<body>
    
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
            $cmtid=$_REQUEST['ofid'];
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
        <form class="form-inline" action="cmt-con.php" role="form">
            <div class="form-input">
                <input style="width: 98%;" name="comment" class="form-control" type="text" placeholder="Your comments" />
            </div><br>
           <input type="hidden" name="offerid" value="<?php echo $cmtid; ?>"><br>
                <button class="btn btn-info" name="cmt">Submit</button>
           
        </form>
    </div>
</div>
</body>
</html>
