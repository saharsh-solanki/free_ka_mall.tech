-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 05:44 AM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paytmbad_paytmbadshah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('saharsh@123', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `offerid` varchar(5000) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `date` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`offerid`, `comment`, `date`) VALUES
('13', 'Thanks for sharing grate information ðŸ¤—ðŸ¤—', 'July 08 , 2020'),
('13', 'Yes I have uninstalled all the application you have given our government is great love you sirâ¤ï¸â¤ï¸â¤ï¸â¤ï¸', 'July 08 , 2020'),
('13', 'Loved it ðŸ”¥ðŸ”¥ðŸ”¥ðŸ”¥', 'July 08 , 2020'),
('10', 'Yes this is the best ðŸ˜ version to any movies and webseries', 'July 08 , 2020'),
('Netflix-Mod-Apk', '100% working mod apk', 'July 12 , 2020'),
('Earn-37rs-by-refering-3-freinds', 'Nice Brother I Have Got  Money', 'July 12 , 2020'),
('Earn-37rs-by-refering-3-freinds', 'I Am Not Sure For Payment i Have Redeem ANd Waiting For Payment', 'July 12 , 2020'),
('Earn-37rs-by-refering-3-freinds', 'nice', 'July 12 , 2020'),
('How-To-Make-SMS-Bomber-For-Free', 'Please Make Second Part of This Video And Upload Bomb.php file', 'July 12 , 2020'),
('TikTok-And-58-Apps-Are-Banneded-in-india-list-is-given', 'Nice  thanks for sharing', 'July 17 , 2020'),
('Amazon-Pay-To-Bank-At-3per-Charges', 'Nice ðŸ˜™ðŸ˜™ðŸ˜™ðŸ˜™ðŸ˜™', 'August 15 , 2020'),
('How-To-Transfer-Amazon-Pay-To-Bank', 'Good', 'August 22 , 2020'),
('Amazon-Pay-To-Bank-At-3per-Charges', 'Ni hora', 'August 22 , 2020'),
('TikTok-And-58-Apps-Are-Banneded-in-india-list-is-given', 'ðŸ¤”ðŸ¤”ðŸ¤”', 'August 22 , 2020');

-- --------------------------------------------------------

--
-- Table structure for table `giveaway`
--

CREATE TABLE `giveaway` (
  `tj` int(255) NOT NULL,
  `winamt` int(255) NOT NULL,
  `gcode` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `entryleft` int(255) NOT NULL DEFAULT 0,
  `winner` varchar(5000) NOT NULL DEFAULT 'not decided',
  `status` varchar(255) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giveaway`
--

INSERT INTO `giveaway` (`tj`, `winamt`, `gcode`, `id`, `bg`, `entryleft`, `winner`, `status`) VALUES
(6, 10, 'PBG1', 1, 'purple', 6, 'not decided', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `gjoinuser`
--

CREATE TABLE `gjoinuser` (
  `id` int(255) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `pno` varchar(5000) NOT NULL,
  `gid` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gjoinuser`
--

INSERT INTO `gjoinuser` (`id`, `name`, `pno`, `gid`) VALUES
(1, 'Paytm badshah', '9399509374', '1'),
(2, 'Himanshu Sunhare', '9074820062', '1'),
(3, 'Smita nayak', '8337998532', '1'),
(4, 'PRANATI NAYAK', '8338001922', '1'),
(5, 'Biswajit nayak', '7504303305', '1'),
(6, 'Biswajit nayak', '7504303605', '1');

-- --------------------------------------------------------

--
-- Table structure for table `guserseq`
--

CREATE TABLE `guserseq` (
  `id` int(255) NOT NULL,
  `gid` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offerid` int(11) NOT NULL,
  `offername` varchar(5000) NOT NULL,
  `tittle` varchar(5000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `offerdis` varchar(5000) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `url` varchar(5000) NOT NULL,
  `views` int(255) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerid`, `offername`, `tittle`, `photo`, `offerdis`, `date`, `url`, `views`) VALUES
(10, 'Netflix Mod Apk', 'You can watch Any movies available on Netflix for free', '20200516_180614.jpg', '<ol style=\"font-family: Yu Gothic;font-weight:400; font-size: 23px;\">     \r\n	<li>Here We Will Provide You Apk Called Netflix Mod .</li><br>    \r\n	<li> This Is Not A Netflix Mod But It Has All The Movies Available in Netflix. </li><br>    \r\n	<li> This Is the best Striming Application </li><br>    \r\n	<li> The Link of The Mod Apk is Provided Below Or You Can Also Download It from The Video Both Link Are Given Below. </li><br>    \r\n	<li> Then Watch the Full Video To Understand How to Use it .</li><br>    \r\n	<li> The Link Of application Is provided in the discription Of the Video</li><br>    \r\n	<li> Remember To Subscribe Or Like The video....</li><br>    \r\n	<li> Thanks for Visiting</li><br>  \r\n</ol><br>\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Click Here To Watch Video For More Information</font><br>\r\n<a href=\"https://youtu.be/0VLlxRWGZtQ\" class=\"btn btn-info\">Watch Video</a></center><br><br>\r\n<center>\r\n<script type=\"text/javascript\">\r\n	atOptions = {\r\n		(sic);key(sic); : (sic);4374a71e5b8b83380e5afd7a139bc174(sic);,\r\n		(sic);format(sic); : (sic);iframe(sic);,\r\n		(sic);height(sic); : 50,\r\n		(sic);width(sic); : 320,\r\n		(sic);params(sic); : {}\r\n	};\r\n	document.write((sic);<scr(sic); + (sic);ipt type=\"text/javascript\" src=\"http(sic); + (location.protocol === (sic);https:(sic); ? (sic);s(sic); : (sic);(sic);) + (sic);://www.topdisplaynetwork.com/4374a71e5b8b83380e5afd7a139bc174/invoke.js\"></scr(sic); + (sic);ipt>(sic););\r\n</script></center>\r\n<br>\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Click Here To Download The Apk From Server 1</font><br>\r\n<a href=\"https://drive.google.com/file/d/1_Ys1CqmXnYOw-xc3T44dTEXPkKCVPIvV/view\" class=\"btn btn-danger\">Download Now</a></center>\r\n\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Click Here To Download The Apk From Server 2</font><br>\r\n<a href=\"https://drive.google.com/file/d/1_Y3l18VR7tmSMaMZp46E1idu-T7xdmtN/view?usp=drivesdk\" class=\"btn btn-danger\">Download Now</a></center><br>\r\n<center>\r\n<script type=\"text/javascript\">\r\n	atOptions = {\r\n		(sic);key(sic); : (sic);4374a71e5b8b83380e5afd7a139bc174(sic);,\r\n		(sic);format(sic); : (sic);iframe(sic);,\r\n		(sic);height(sic); : 50,\r\n		(sic);width(sic); : 320,\r\n		(sic);params(sic); : {}\r\n	};\r\n	document.write((sic);<scr(sic); + (sic);ipt type=\"text/javascript\" src=\"http(sic); + (location.protocol === (sic);https:(sic); ? (sic);s(sic); : (sic);(sic);) + (sic);://www.topdisplaynetwork.com/4374a71e5b8b83380e5afd7a139bc174/invoke.js\"></scr(sic); + (sic);ipt>(sic););\r\n</script></center><br>\r\n\r\n<font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">About Netflix :-</font><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:350; font-size: 22px;\">\r\n	Netflix is one of the famous Video Streaming Site. It Provide You to Watch Movie Available on it But it cost you approx 129RS for a Month and 329RS for 3Month .That Why we have discovered this apk for you .Netflix is now more popullar for its webseries and video quality that in today age many persone spend their free time to watch movies and webseries on netflix . \r\n</font><br>\r\n<center>\r\n<div style=\"width: 300px;overflow: hidden;\">\r\n<script type=\"text/javascript\">\r\n		atOptions = {\r\n			(sic);key(sic); : (sic);502ae82fcea6dc678d3d7ede00c88624(sic);,\r\n			(sic);format(sic); : (sic);iframe(sic);,\r\n			(sic);height(sic); : 90,\r\n			(sic);width(sic); : 728,\r\n			(sic);params(sic); : {}\r\n		};\r\n		document.write((sic);<scr(sic); + (sic);ipt type=\"text/javascript\" src=\"http(sic); + (location.protocol === (sic);https:(sic); ? (sic);s(sic); : (sic);(sic);) + (sic);://www.topdisplaynetwork.com/502ae82fcea6dc678d3d7ede00c88624/invoke.js\"></scr(sic); + (sic);ipt>(sic););\r\n	</script></center>\r\n</div>\r\n<font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">About Netflix Mod Apk :-</font><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:350; font-size: 22px;\">\r\n	This is a apk which provide you to watch any movies availabe on netflix for free lifetime you don(sic);t need to any ruppe for it .I know that you can pay for subscription but you dont need to do it. this is totaly free you can watch any movies like hollywood , bollywood etc. its has also available most popullar webseries like game of thrones , The Flash , Supper Girl , The Arrow , Legend Of Tomoro and etc.. \r\n</font><br>\r\n<center>\r\n<font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">Some Screenshots :-</font><br>\r\n<img style=\"height:450px;width:300px;\" src=\"https://gdurl.com/x2_Z/download\"><br><br>\r\n<img style=\"height:450px;width:300px;\" src=\"https://gdurl.com/ifmT/download\"></center>', NULL, 'Netflix-Mod-Apk', 6),
(11, 'Earn $0.5 By Refring 3 Friends', 'Earn Approx 37RS For 3Freinds And Also For Playing Games', 'coin.jfif', '<ol style=\"font-weight:400; font-size: 23px;\">    <li>First Of Download The App Link is Given Below.</li><br>\r\n    <li>Now, Singup In the App Using Your Gmail Id .</li><br>\r\n    <li> Wohho, You Will Successful Get 4444 Coin As Singup Bonus .</li><br>\r\n    <li>Now Go To The Refer And Earn Section copy Your Refral Link Then Invite 3 Frinds</li><br>\r\n    <li>For Every Successful Refer You Will Get 250 Coin .</li><br>\r\n</ol><br><br>\r\n<font style=\"font-weight:400; font-size: 23px;\">How To Withdraw In Paypal</font><br>\r\n<ol style=\"font-weight:400; font-size: 23px;\">     \r\n    <li>If You Are Withdrawing In PayPal Then you Must Done KYC of You Paypal account in order to recive money.</li><br>\r\n    <li>Then , Go To Withdraw Section And Click On payapl min withdraw is 4999coin </li><br>\r\n    <li>Add Your Paypal Account .</li><br>\r\n    <li>Within 72Hours You will Recive Payment .</li><br>\r\n    <li> When You Recive A Email Confirmation That You Have Recived Any Amount from Applike.</li><br>\r\n    <li>Then Login Your Paypal Account Click On accept Payment If You Haven(sic);t Done This Thing You Will Not Recived any Amount</li><br>\r\n    <li>Paypal Will Transfer This Amount To You Linked bank Account Within 3 day.</li><br>\r\n    <li></li><br>\r\n</ol><br><br><font style=\"font-weight:400; font-size: 23px;\">If You Can(sic);t Refer Friends </font><br>\r\n<ol style=\"font-weight:400; font-size: 23px;\">     \r\n    <li>If You can not Refer Any Frinds Then Don(sic);t Worry You Can Also Eanr Money. </li><br>\r\n    <li>Follow The Signup process</li><br>\r\n    <li> Under The App section Download Then Highest Coin Paying App like 20coin for 60sec.</li><br>\r\n    <li>Then Download It .</li><br>\r\n    <li> then Click on open form app just put Your Mobile On charging .</li><br>\r\n    <li>And Do Whatever You Want  after 3-4 hours come bank your coin increase According To app </li><br>\r\n    <li>Please Check That coin is coming or You do not on Automatically Locked </li><br>\r\n    <li>Otherwise It Will Not give Coin </li><br>\r\n</ol><br>\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Click Here To Watch Video For More Information</font><br>\r\n<a href=\"https://youtu.be/Oq50B1atZCQ\" class=\"btn btn-info\">Watch Video</a><br><br>\r\n<font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Click Here To Download The Application</font><br>\r\n<a href=\"https://r.coinpop-app.com/campaign/affiliate/15f0d0fdabb540929978314468276969?channel=\" class=\"btn btn-danger\">Download Now</a><br><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">About The App :-</font><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:350; font-size: 22px;\">Their Are Many App available like This On Internet But This Is trusted by me</font><br><font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">Some Payment Prof Screenshots :-</font><br>\r\n<img style=\"height:500px;width:300px;\" src=\"https://gdurl.com/ZtDI/download\"><br><br>\r\n<img style=\"height:500px;width:300px;\" src=\"https://gdurl.com/D4A8/download\"></center>', NULL, 'Earn-37rs-by-refering-3-freinds', 100),
(12, 'How To Transfer Amazon Pay Balence To Bank', 'You Can Transfer Any Amount To Your Bank account ', '11.jpeg', '<ol style=\"font-family: Yu Gothic;font-weight:450; font-size: 20px;\">\r\n	<li>This is The Newest Way To Transfer Amazon pay Balence To Bank. </li><br>\r\n	<li>And The Main This That Charges Are only 5-7% . </li><br>\r\n                  <li>First of Go To Komarify Site (Link is Given Below).</li><br>\r\n	<li>Now Create Your Account Using Your Details You Can Also Singup using Directly Google Account.</li><br>\r\n	<li> Now Go To Home Page You Will See Banner Like Buy Gold  Then Click on It<li><br>\r\n	<li>Now Enter Your Amount You Want To Transfer.</li><br>\r\n                  <li>Now Buy Gold .</li><br>\r\n	<li>After Bying Gold Now Go To The Menu Section ---> Gold ---> Sell Gold</li><br>\r\n                 <li> Note That You Can Transefer You Money After 24Hours of Bying Gold.</li><br>\r\n                 <li>Now Enter Amount or You Can Also Enter Grames Now Enter Your Bank Details .</li><br>\r\n                 <li>Click On Sell Button You Will Recive Your Amount Within 72hour in Your Bank Account  .</li><br>\r\n                 <li>Enjoy It</li><br>\r\n</ol>\r\n\r\n<br>\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Click Here To Watch Video </font><br>\r\n<a href=\"https://youtu.be/CaGODIbFUvA\" class=\"btn btn-danger\">Watch  Now</a></center>\r\n\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Go To Website</font><br>\r\n<a href=\"https://komarify.com\" class=\"btn btn-danger\">Go To Website</a></center><br>', '29 June,2020', 'How-To-Transfer-Amazon-Pay-To-Bank', 12),
(13, 'TikTok +58 Chinese apps are Ban in india', 'Indian government Ban all the Chinese apps the list of Chinese apps are given click to view', '1200px-ProhibitionSign2.svg.png', '<center><font style=\"font-weight:500; font-size: 30px;\">List of 59apps Ban In India</font></center><br><br>\r\n<ol style=\"font-weight:400; font-size: 20px;\">     \r\n	<li>TikTok</li><br> \r\n	<li>sharit</li><br>\r\n	<li>Kwai</li><br>\r\n	<li>Uc Browser</li><br>\r\n	<li>Shein</li><br>\r\n	<li>Baidu Map</li><br>\r\n	<li>Clash Of Kings</li><br>\r\n	<li>Du Battery Saver</li><br>\r\n	<li>Helo</li><br>\r\n	<li>likee</li><br>\r\n	<li>YouCam Makeup</li><br>\r\n	<li>Mi Community</li><br>\r\n	<li>CM BROWSER</li><br>\r\n	<li>Viruse Cleanet</li><br>\r\n	<li>Apus Browser</li><br>\r\n	<li>ROMER</li><br>\r\n	<li>Club Factory </li><br>\r\n	<li>News Dog</li><br>\r\n	<li>We Chat</li><br>\r\n	<li>Buety Plus</li><br>\r\n	<li>QQ Mail</li><br>\r\n	<li> Uc News</li><br>\r\n	<li>Weibo</li><br>\r\n	<li>Xender</li><br>\r\n	<li>QQ NewsFeed</li><br>\r\n	<li>QQ Music</li><br>\r\n	<li>Bigo Live</li><br>\r\n	<li>Selfi City</li><br>\r\n	<li>Mail Master</li><br>\r\n	<li>Parallel Space</li><br>\r\n	<li>Du Privacy</li><br>\r\n	<li>Mobile Legends</li><br>\r\n	<li>V Fly Status Video</li><br>\r\n	<li> U Video</li><br>\r\n	<li>QQ Launcher</li><br>\r\n	<li>QQ Security Center</li><br>\r\n	<li>QQ International</li><br>\r\n	<li>Vmate</li><br>\r\n	<li>Baidu Translate</li><br>\r\n	<li>Sweet Selfi</li><br>\r\n	<li>We Meet</li><br>\r\n	<li>QQ Player</li><br>\r\n	<li>Photo Wonder</li><br>\r\n	<li>Wonder Camara</li><br>\r\n	<li>Clean Master - cheeta mobile</li><br>\r\n	<li>Can Scaner</li><br>\r\n	<li>Hago Play with New Apps</li><br>\r\n	<li>Du Browser</li><br>\r\n	<li>Du Cleaner</li><br>\r\n	<li>Cachee Cleaner Du App Studio</li><br>\r\n	<li>Vault Hide </li><br>\r\n	<li>Du Recorder</li><br>\r\n	<li>New  video Status</li><br>\r\n	<li>Vigo Video</li><br>\r\n	<li>Meitu</li><br>\r\n	<li>Viva Video</li><br>\r\n	<li>Es File Explorer</li><br>\r\n	<li>We Scan</li><br>\r\n	<li>Mi Video Call Xiaomi</li><br>\r\n</ol><br><br>\r\n<center><font style=\"font-weight:400; font-size: 24px;\">News</font></center><br>\r\n<font style=\"font-weight:400; font-size: 24px;\">Indian government banded all 59 apps including Tiktok ,UC browser ,UC news, xender hello and etc. this is the official news from Indian Government. </font><br><br>\r\n\r\n<center><font style=\"font-weight:400; font-size: 24px;\"> Read It also</font></center><br>\r\n<font style=\"font-weight:400; font-size: 24px;\"> the main thing we all wanted is happen finally tik tok is banned by government. now read all the apps carefully and if the given apps are installed in your mobile so please go and uninstall all the apps these all are apps are Chinese apps</font>', '29 June,2020', 'TikTok-And-58-Apps-Are-Banneded-in-india-list-is-given', 34),
(14, 'How To Make SMS BOMBER FOR FREE', 'The like of html and php file is given with video Toutorial watch and create your own', '20200708_173119.jpg', '<center><font style=\"font-weight:400; font-size: 23px;\">How to run HTML and PHP code</font></center><br>\r\n<ol style=\"font-weight:400; font-size: 23px;\">     \r\n	<li>first you need and editor I am using anwriter to write your code</li><br>    \r\n    <li>now download KSWEB Mod APK from the given link</li><br>\r\n    <li>after downloading the KS web now open it</li><br>\r\n    <li>and do all the process which are required sign up and etc.</li><br>    \r\n    <li>basically you need to configure all the requirements.</li><br>\r\n    <li>now you can save your file in ksweb folder</li><br>\r\n    <li>your URL should be e localhost://8080 </li><br>    \r\n    <li>this app create a local server for you so you can run your PHP code</li><br>\r\n    </ol><br><br><br>\r\n    \r\n    <center><font style=\"font-weight:400; font-size: 23px;\">How to edit files</font></center><br>\r\n    <ol style=\"font-weight:400; font-size: 23px;\">     \r\n    <li>you need to files first index and second bomb.PHP</li><br> \r\n    <li>download index file from the below link</li><br>\r\n    <li>now edit this file like colour font size and your URL off YouTube telegram and etc</li><br>\r\n    <li>now save your file in ksweb folder</li><br> \r\n    <li>now enable the server and open the URL localhost 8080</li><br>  \r\n      <li>test your index file that everything is fine..</li><br>\r\n      </ol><br><br><br>\r\n    \r\n    <center><font style=\"font-weight:400; font-size: 23px;\">How to host your file or create website</font></center><br>\r\n    <ol style=\"font-weight:400; font-size: 23px;\">     \r\n    <li>first of all go to to infinity free web hosting site and create your account</li><br>\r\n    <li>now go to your control panel section</li><br>\r\n    <li>now go to your file manager section</li><br>\r\n    <li>and then upload both files index and boom file</li><br>\r\n    <li>now open your website URL for example https://username.epizy.com </li><br>\r\n    <li>now you can share it with anyone you want</li><br>\r\n    </ol><br><br><br>\r\n    \r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Full Toutorial Part : 1 (how to edit html and setup)</font><br>\r\n<a href=\"https://youtu.be/4e_8nZIP4yQ\" class=\"btn btn-info\">Watch Video</a><br><br>\r\n\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Full Toutorial Part : 2 (how to create bomb.php file or send sms code)</font><br>\r\n<a href=\"\" class=\"btn btn-primary\">Watch Video</a><br><br>\r\n\r\n<center><font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Full Toutorial Part : 3 (how to host your website )</font><br>\r\n<a href=\"\" class=\"btn btn-dark\">Watch Video</a><br><br>\r\n<font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Download KSWEB MOD APK</font><br>\r\n<a href=\"https://gplinks.co/wvd5\" class=\"btn btn-dark\">Server 1</a><br><br>\r\n<font style=\"font-family: Comic Sans MS;font-weight:400; font-size: 23px;\">Download index.html files</font><br>\r\n<a href=\"https://gplinks.co/Paytmbadshah-sms-bomber\" class=\"btn btn-danger\">Server 1</a><br><br>\r\n<a href=\"https://onotepad.com/note/oup4v60a7gr/660022\" class=\"btn btn-danger\">Server 2</a><br><br>\r\n\r\n<font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">What Is SMS-BOMBER ?</font><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:350; font-size: 22px;\">SMS bomber online tool that can send SMS to a particular person by its number. when you enter the number of the person then a number of SMS will be send to that person so the person will get disturb you can use it for fun purpose </font><br><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">It Is Free ?</font><br>\r\n<font style=\"font-family: Yu Gothic;font-weight:350; font-size: 22px;\">Yes ,it is 100% free you can download any files I have provide you approx 5 website data for free with link </font><br>\r\n</center></center></center>', '08 July,2020', 'How-To-Make-SMS-Bomber-For-Free', 10),
(15, 'Amazon Pay To Bank', 'Amazon Pay To Bank At 2.5% Charges', '20200815_144053.jpg', '<h4> Guys Follow This Steps </h4><br><br> 1. First Of All Download Paidkiya From Playstore Or Click Here <a class=\"btn btn-danger\" href=\"https://play.google.com/store/apps/details?id=com.paidkiyanew\">Download</a><br><br>  2. After Downloading Singup To You Account .<br><br> 3. Enter Basic Details or Singup Using Gmail Directly.<br><br> 4. After Successful SINGUP Complete You KYC By Pancard or Other Documents .<br><br> 5. Your Kyc Will be approved Within 2or 3 day  .<br><br> 6. Now , Click on 2 option Bank Click on add Payee .<br><br> 7. Now Enter Your Bank account details .<br><br> 8. Like Account Ã‘umber , Name , email etc....<br><br> 9. Then Enter Amount Now select Time High (2.85% charge) or medium (2.50% charge) .<br><br> 10. Select anyone .<br><br> 11. Now click on first option then 4th option wallet .<br><br> 12. Select Amazon pay Then pay .<br><br> 13. Your Money Will Be credit within 3day .<br><br><br> <h3> Guys This Trick is trusted by me You can Trust But don(sic);t Transfer more amount transfer small amount ðŸ˜ðŸ˜¬ðŸ˜ðŸ˜ Thanks for reding this Post </h3><br><br> <center> <font style=\"font-family: Yu Gothic;font-weight:500; font-size: 27px;\">Some Screenshots :-</font><br> <img style=\"height:450px;width:300px;\" src=\"https://gdurl.com/NlMC/download\"><br><br> <img style=\"height:450px;width:300px;\" src=\"https://gdurl.com/mpeF/download\"\"></center>', '15 August,2020', 'Amazon-Pay-To-Bank-At-3per-Charges', 26);

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `tittle` varchar(5000) NOT NULL,
  `pagename` varchar(5000) NOT NULL,
  `scriptid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`tittle`, `pagename`, `scriptid`) VALUES
('SMS BOMBER SCRIPT', '../sms-bomber', 3);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(255) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `mobno` varchar(5000) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `mobno`, `email`, `message`, `status`) VALUES
(1, 'RAM', '9999999999', 'justforhost26@gmail.com', 'message', 'solved'),
(2, 'eric@talkwithwebvisitor.com', '', 'eric@talkwithwebvisitor.com', 'message', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `unique_visitor` int(255) NOT NULL,
  `page_hits` int(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`unique_visitor`, `page_hits`, `id`) VALUES
(21, 62, 1);

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `name` varchar(5000) NOT NULL,
  `gid` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`name`, `gid`) VALUES
('sagar', 'pb2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giveaway`
--
ALTER TABLE `giveaway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gjoinuser`
--
ALTER TABLE `gjoinuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerid`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`scriptid`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giveaway`
--
ALTER TABLE `giveaway`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gjoinuser`
--
ALTER TABLE `gjoinuser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `scriptid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
