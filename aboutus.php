<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$include="menux.php";
}
else
{
	$include="menusp.php";
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7174188-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-7174188-3');
</script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Spanish courses and services">
    <meta name="keywords" content="Spanish Language, Learn Spanish, DELE preparation, Spanish Grammer, Spanish Vocabulary, Spanish training for Corporates, Spanish training, Business services in Spanish, Spanish business letter writing services, Spanish Translaions, Spanish culture, all about Spain, Spanish in India ">
	    
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <meta name="author" content="Luis">
<style>
	<!--

@media only screen 
   and (min-width : 900px) {
   /* Styles here */

body{
    background: white;
	align: center;
	font-face: garamond;
    background: url("flamencosm.jpg")repeat-y scroll 100% 0%;
	align: center;
	height: 100%;
    padding-top: 10;
	padding-bottom: 0;
}
div.card {
  width: 900px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 200px;
  margin-top: 20px !important;
  height: 720px;
  word-wrap: normal;
	align: center;
	line-height: 300%;
	padding: 40px;
  }
  div.card1 {
  width: 220px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  margin-top: 20px;
  height: 400px;
  padding: 10px !important;
  word-wrap: normal;
  display: inline-block;
  }
  div.card2 {
  width: 900px;
}
div.card3 {
  width: 200px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  margin-top: 20px;
  height: 200px;
  display: inline-block;
}

div.header {
    background-color: #4CAF50;
    color: white;
    padding: 0px;
    font-size: 20px;
	word-wrap: break-word;
}
div.headerarticle {
    background-color: #7d00fb;
    color: white;
    padding: 0px;
    font-size: 20px;
	
}

div.container {
    padding: 10px !important;
	word-wrap: normal !important;
	width: auto !important;
}
   }
-->
</style>
        <title>About us</title>

   
        
    </head>
	<?php
include "$include";
?>
    

       <div class="card">
  <div class="container" >
  <h1><center><font color="4C4C4C">About us</font></center></h1><br>
India is a country of rich culture. With around 30 million Indians living abroad it is no doubt a proven fact that Indians adapt easily to different cultures. Although India is a totally different world compared to any other country, Indians especially get attracted to any country with an equally rich culture. Spain is one of those countries. We at SpanishIndia intend to provide a single platform for all interested in the Spanish language and culture. Be it simply for the love of the language and culture or for career or business purposes, we have setup a website attempting to provide the best services given our association with Spain for nothing less than 4 decades. We offer our services for reasonable prices and these include:<br><br>

•	A complete <a href="learnspanish.php">Spanish </a>course. Click to request course fee and get <a href="contact.php"> more information.</a><br><br>
•	<a href="corporate.php">Translation </a>services. Click to request quote and get <a href="translation_request.php">more information.</a><br><br>
•	<a href="corporate.php">Miscellaneous services </a>for Expoters’ and other businesses. Click to request quote and get<a href="contact.php">  more information.</a><br><br>

This site is open for all and everyone from any country who would want to learn Spanish or request for our translation or other business services as it is rightly said “While China is the world´s factory, India is it´s office”

</div>

</div>
<br>
<br>
<br>
<br>		  
        <!--/.fluid-container-->
        
    </body>
    <?php include "footer.php" ?>     
</html>