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
	     <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
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
    background: #E1F4BA;
background: -moz-linear-gradient(left, #E1F4BA 0%, #FFFFFF 50%, #CEEDA6 100%);
background: -webkit-linear-gradient(left, #E1F4BA 0%, #FFFFFF 50%, #CEEDA6 100%);
background: linear-gradient(to right, #E1F4BA 0%, #FFFFFF 50%, #CEEDA6 100%);
	align: center;
	font-face: garamond;
	height: 100%;
    padding-top: 10;
	padding-bottom: 0;
}
div.card {
  width: 900px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 200px;
  margin-top: 20px !important;
  height: 600px;
  word-wrap: normal;
	align: center;
	line-height: 300%;
	padding: 40px;
	background-color: white;
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
        <title>Learning Spanish</title>       
    </head>
    <?php
include "$include";
?>

       <div class="card">
  <div class="container" >
  <h1><center><font color ="4C4C4C">Learning Spanish</font></center></h1><br>
When was the last time you did something for the first time? Isn’t life beautiful when it is full of wonderful experiences ! There is so much to learn and although learning is all about gaining knowledge, few things are truly worthwhile learning. The Spanish language is one of these wonderful things. They say language is the key to a culture. Lose your language and you will lose your culture! Looking at this from a different perspective we can also say that Learn a language to learn the culture it belongs to. Spanish is a singing language which I believe when spoken makes you think and look at things in a different way, i.e. in the colourful Spanish way.  Besides the wonderful experience of learning Spanish the other main advantage, which now is widely known, is the cutting edge of being able to communicate with so many more people. Spanish is the second most spoken language by native speakers. A total of 477 million (48 cr.) people speak Spanish. More than 20 countries have Spanish as their official language. 
So come along and open your doors to 20 more countries whether you want to do business or move to a beautiful new country or add a feather to your hat. Speak Spanish and experience the Spanish Culture ! <a href="contact.php"> Click for more information.</a><br><br>
</div>
<br>
<br>
<br>
		  
        <!--/.fluid-container-->
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
   <?php include "footer.php" ?>      
    </body>

</html>