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
  height: 700px;
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
        <title>Learning Spanish</title>       
    </head>
    <?php
include "$include";
?>

       <div class="card">
  <div class="container" >
  <h1><center><font color ="4C4C4C">Corporate Services and Spanish Translations</font></center></h1><br>
Today´s world´s  increased trust and dependence on India for outsourcing coupled with Indian companies going global has led to a continuous demand for effective business  communications, translations and interpretation in several foreign languages . With regards to this, the Spanish language is one of the most demanded languages. However easily available electronic translators and softwares such as google may be, accuracy and the personal touch still remain undelivered thus rendering all other investment of time, money and manpower  completely  ineffective.
 At your disposition is our vast experience and expertise in the Spanish language. Having dealt with the Spanish business world for decades, we are well equipped to meet your requirements for accurate and timely business requirements at reasonable prices. We provide professional services for:</br>
•	Translations from Spanish to English or English o Spanish.</br>
•	Spanish content for websites.</br>
•	Professional Spanish Business Letters.</br>
•	Corporate Training.</br>
•	Interpretor services.</br>
Request a quote now and let us be your missing link to success !
Click to request quote and get <a href="translation_request.php">more information.</a><br><br>
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