<?php 
session_start();
if(isset($_SESSION['un'])){
    ob_start();
    header('location:dashbord.php');
    ob_clean();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>LOGIN</title>
    </head>
    <style>
        html{
    background-color: #f3f3f3;
}
   .form-login{
    max-width: 1000px;
    width: 100%;
    margin: 0 auto;

    font: bold 14px sans-serif;
    text-align: center;
}
.form-log-in-with-email{
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin-right: 130px;
    text-align: center;
}

.form-log-in-with-email .form-white-background{
    width: 570px;
    box-sizing: border-box;
    background-color: #ffffff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 60px 80px;
    margin-bottom: 32px;
}

.form-log-in-with-email .form-row{
    text-align: left;
    margin-bottom: 23px;
}

.form-log-in-with-email .form-title-row{
    text-align: center;
    margin-bottom: 60px;
}

.form-log-in-with-email h1{
    display: inline-block;
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 0 30px 15px;
    border-bottom: 2px solid #6caee0;
    margin:0;
}

.form-log-in-with-email .form-row > label span{
    display: inline-block;
    box-sizing: border-box;
    color:  #5f5f5f;
    width: 125px;
    text-align: right;
    padding-right: 25px;
}

.form-log-in-with-email input{
    color:  #5f5f5f;
    box-sizing: border-box;
    width: 230px;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 12px 18px;
    border: 1px solid #dbdbdb;
}

.form-log-in-with-email button{
    display: block;
    border-radius: 2px;
    background-color:  #6caee0;
    color: #ffffff;
    font-weight: bold;
    box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.08);
    padding: 15px 35px;
    border: 0;
    margin: 55px auto 0;
    cursor: pointer;
}

.form-log-in-with-email .form-forgotten-password,
.form-log-in-with-email .form-create-an-account{
    text-decoration: none;
    padding: 4px 8px;
    font-weight: normal;
}

.form-log-in-with-email .form-forgotten-password{
    color:  #4e9eda;
}

.form-log-in-with-email .form-create-an-account{
    color:  #7b9d62;
    background-color: #d6f0c3;
}

.form-sign-in-with-social{
    display: inline-block;
    max-width: 180px;
    box-sizing: border-box;
    vertical-align: top;
    text-align: center;
    margin-top: 70px;
}

.form-sign-in-with-social .form-title-row{
    margin-bottom: 50px;
}

.form-sign-in-with-social .form-title{
    box-sizing: border-box;
    color:  #4c565e;
    font-size: 24px;
    padding: 15px 20px;
    border-bottom: 2px solid #6caee0;
}

.form-sign-in-with-social .form-google-button{
    color:  #ffffff;
    display: block;
    width: 145px;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background-color:  rgba(222, 110, 60, 0.9);
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    margin: 8px auto;
    text-decoration: none;
}

.form-sign-in-with-social .form-facebook-button{
    color:  #ffffff;
    display: block;
    width: 145px;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background-color:  rgba(75, 136, 194, 0.9);
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    margin: 8px auto;
    text-decoration: none;
}

.form-sign-in-with-social .form-twitter-button{
    color:  #ffffff;
    display: block;
    width: 145px;
    height: 40px;
    font-size: 12px;
    line-height: 40px;
    background-color:  rgba(123, 195, 226, 0.9);
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.08);
    border-radius: 2px;
    margin: 8px auto;
    text-decoration: none;
}

/*	Making the form responsive. Remove these media queries
    if you don't need the form to work on mobile devices. */

@media (max-width: 900px) {

    .form-login{
        margin: 20px auto;
    }

    .form-log-in-with-email{
        position: relative;
        display: block;
        margin: 0 0 50px;
    }

    .form-log-in-with-email .form-white-background{
        margin: 0 auto 32px;
    }

    .form-log-in-with-email:after{
        bottom: -80px;
        left: 50%;
        margin-left: -25px;
    }

    .form-sign-in-with-social{
        margin-top: 60px;
    }

}

@media (max-width: 600px) {

    .form-log-in-with-email .form-white-background{
        width: 300px;
        padding-left: 35px;
        padding-right: 35px;
    }

    .form-log-in-with-email .form-row > label span{
        display: block;
        text-align: left;
        padding: 0 0 10px;
    }

    .form-log-in-with-email .form-email,
    .form-log-in-with-email .form-password{
        display: block;
        margin: 0 auto;
    }

   
   

}
    </style>
    <body>
        <br><br><br><br><br>
        <form class="form-login" action="login.php" method="post">
           <div class="form-log-in-with-email">
                <div class="form-white-background">
                    <div class="form-title-row">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>UserName</span>
                            <input type="text" name="un" required="required">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="ps" required="required">
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit">Log in</button>
                    </div>

                </div></div></form>
        
    
    </body>
</html>
<?php 
if (isset($_POST['submit'])) {
    $un=$_POST['un'];
    $ps=$_POST['ps'];
    include('../dbcon.php');
    //$con=mysqli_connect('localhost','root','','studentphp');
    $query="SELECT * FROM `admin` WHERE `username`='$un' and `password`='$ps'";
    $run=mysqli_query($con,$query);
    $row=mysqli_num_rows($run);
    if($row < 1){?>
        <script type="text/javascript">
            alert('inccorect Details !!');
            window.open('login.php','_self');
        </script>
        <?php }
    else{
        $data=mysqli_fetch_assoc($run);
         session_start();
         $_SESSION['un']=$un;
        header('location:dashbord.php');
    }
}
?>
