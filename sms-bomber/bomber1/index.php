<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="../css/login.css">
<style type="text/css">
	  body{
        background: #eee;
      }

</style>
</head>
<body style="background: #eee;">

<?php include ('../../header.php'); ?>

<center><div  class="card text-black  mb-3" style="width: 80%;">
  <div class="card-header"><h3>Wel-Come To Paytm Badshah</h3><h4>SMS BOMBER</h4></div>
</div>

<a class="btn btn-warning" href="#sms-bomber">open SMS Bomber</a><br><br>
<a class="btn btn-danger" href="#how-to-use">How TO USE</a><br><br>

<div class="card text-white bg-success mb-3" style="width: 80%;">
  <div class="card-body">
    <h5>SMS BOMBER Tool is made for fun purpose we are not responsible for any kind of activity </h5>
  </div>
</div>

<div > 
<div  class="card secondary mb-3" style="border: 5px solid purple;max-width: 18rem;">
  <div style="border-bottom: 5px solid purple;" class="card-header">What is SMS Bomber?</div>
  <div class="card-body text-secondary">
    <p class="card-text"> SMS Bomber is tool that is used for sending sms to person for any reson here we send sms in the form of otp of many company we created it for fun purpose </p>
  </div>
</div>
</div> 
        
 <div class="card text-white bg-danger mb-3" style="width: 80%;">
  <div class="card-body">
    <h5>Use This Tool and Enjoy But Note That Devloper is not Responsible For Anything</h5>
  </div>
</div>

 
<div id="sms-bomber"  class="card secondary mb-3" style="border: 4.2px solid black;width: 80%;">
  <div style="border-bottom: 4px solid black;" class="card-header"><h4 style="font-family:Yu gothic;" > ! SMS Bomber ! <h4></div>
  <div class="card-body text-secondary">
      <form action="bomb.php">
        Enter Victime Number
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1">+91</span>
          </div>
        <input type="text" class="form-control" placeholder="Enter Victim Number" name="mobno" aria-label="Username" aria-describedby="basic-addon1">
        </div>
 NO OF SMS TO SEND
      <input type="text" class="form-control" placeholder="SMS count" aria-label="sms" name="sms-count" aria-describedby="basic-addon1"><br>
      Chose Speed Of Bombing
    <div class="form-check" style="float: left;margin-left: 30px;">
      <input class="form-check-input" type="radio"  id="exampleRadios1" value="Slow" name="speed" checked>
      <label class="form-check-label" for="exampleRadios1">
        Slow
      </label>
    </div><br>
    <div class="form-check" style="float: left;margin-left: 30px;">
      <input class="form-check-input" type="radio"  name="speed" id="exampleRadios2" value="fast">
      <label class="form-check-label" for="exampleRadios2">
        Fast
      </label>
    </div>
</div>
<center>
  <button type="submit" style="height: 40px;width: 250px;" class="btn btn-success">Start Bombing</button></center><br>
  </form>
  Don't Leave This Page OtherWise Bombing Will Stop
  </div>
   <div class="card text-white bg-primary mb-3" style="width: 80%;">
  <div class="card-body">
    <h5>Created By :- Paytm Badshah</h5>
  </div>
</div>
<div id="how-to-use" class="card mb-3" style="width: 80%;">
  <div class="card-header text-white bg-success"><h4>How To Use ?</h4></div>
  <div class="card-body">
      <h5><ul >
        <li>Open Our Site</li>
        <li>Enter Victim Number</li>
        <li>Enter Amount OF SMS</li>
        <li>Enter Speed OF Bombing</li>
        <li>Click On Start Bombing</li>
     </ul></h5>
  </div>
</div>


<div style="margin-left: 18%;"> 
    <div  class="card secondary mb-3" style="margin-left:20px;border: 5px solid purple;max-width: 18rem;float: left;">
      <div style="border-bottom: 5px solid purple;" class="card-header">NOTE :-</div>
      <div class="card-body text-secondary">
        <p class="card-text"> <ul><li>Don't Use To Much Time .</li>
        <li>We Are Not Resposible For Any Kind OF activity</li>
        <li>Use At Your Own Rise </li>

        </ul> </p>
      </div>
    </div>
    <div  class="card secondary mb-3" style="margin-left:20px;border: 5px solid purple;max-width: 18rem;float: left;">
      <div style="border-bottom: 5px solid purple;" class="card-header">Donwnload App</div>
      <div class="card-body text-secondary">
        <p class="card-text"> Yes Now u can download our app same as website. now it is unavailabe in play store we are trying to give you our best service </p>
      </div>
    </div>
    <div  class="card secondary mb-3" style="margin-left:20px;border: 5px solid purple;max-width: 18rem;float: left;">
      <div style="border-bottom: 5px solid purple;" class="card-header">Create You Own Bomber Free</div>
      <div class="card-body text-secondary">
        <p class="card-text"> This Facility Will be availabe on our site in few time now it is availabe you don't need any type of coding to create your sms bomber </p>
      </div>
    </div>
</div><br>

<div class="card mb-3" style="width:80%;">
  <div class="card-header text-white bg-success"><h4>Need Suport </h4></div>
  <div class="card-body">
     You Can Contact As Any time Time We will response Your query in some time click the below button to contact<br>
  <a class="btn btn-success" href="../../contact-us.php">Contact</a>
  </div>
</div>

</body>
</html>