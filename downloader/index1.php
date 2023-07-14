<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title>SMS BOMBER PAYTM BADSHAH</title>
</head>
<body>
</body style="background: #eee;">
<?php include('../header.php'); ?>
  <center><div class="card text-black  mb-3" style="width: 80%;">
  <div class="card-header"><h3>Wel-Come To Paytm Badshah</h3><h4>SMS BOMBER</h4></div>
</div></center>

<center>
<div id="downloader"  class="card secondary mb-3" style="border: 4.2px solid black;width: 80%;">
  <div style="border-bottom: 4px solid black;" class="card-header"><h4 style="font-family:Yu gothic;" > ! YouTube Video Downloader ! <h4></div>
  <div class="card-body text-secondary">
      <form  id="download" action="getvideo.php">
        <h5>Enter Video Link</h5>
        <div class="input-group mb-3">
        <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="YouTube Link or VideoID" autofocus>
          <input type="hidden" name="type" id="type" value="Download"/>
        </div>
  <button type="submit"  class="btn btn-primary btn-lg">Start Downloading</button><br>
  </form>
 </div>
</div>
  <div class="card text-white bg-primary mb-3" style="width: 80%;">
  <div class="card-body">
    <h5>Created By :- Paytm Badshah</h5>
  </div>
</div>


<div id="how-to-use" class="card mb-3" style="width: 80%;">
  <div class="card-header text-light bg-danger"><h4>Valid inputs are YouTube links or VideoIDs:</h4></div>
  <div class="card-body">
      <h5><ul>
      <li>youtube.com/watch?v=...</li>
      <li>youtu.be/...</li>
      <li>youtube.com/embed/...</li>
      <li>youtube-nocookie.com/embed/...</li>
      <li>youtube.com/watch?feature=player_embedded&v=...</li>
    </ul></h5>
  </div>
</div>

<div id="how-to-use" class="card mb-3" style="width: 80%;">
  <div class="card-header text-white bg-success"><h4>How To Use ?</h4></div>
  <div class="card-body">
      <h5><ul >
        <li>Open Our Site</li>
        <li>Enter Video Link</li>
        <li>Click On Start Downloading</li>
        <li>Select the video or Audio format </li>
        <li>Want To Download</li>
     </ul></h5>
  </div>
</div>

<div class="card mb-1" style="width:80%;">
  <div class="card-header text-white bg-success"><h4>Need Suport </h4></div>
  <div class="card-body">
     You Can Contact As Any time Time We will response Your query in some time click the below button to contact<br>
  <a class="btn btn-success" href="../../contact-us.php">Contact</a>
  </div>
</div>

 
    
    <?php
   // if ( $this->get('showBrowserExtensions') === true )
    //{
     // echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
    //}
    ?>
    <hr />
    
    <div class="clearfix"></div>
    </form>
  </div>
<br>
<?php include('../rel-offer.php'); ?>
<?php include('../footer.php'); ?>


</body>
</html>
