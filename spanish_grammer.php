 <?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('login.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Spanish courses and services">
    <meta name="keywords" content="Spanish Language, Learn Spanish, DELE preparation, Spanish Grammer, Spanish Vocabulary, Spanish training for Corporates, Spanish training, Business services in Spanish, Spanish business letter writing services, Spanish Translaions, Spanish culture, all about Spain, Spanish in India ">
	     <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <meta name="author" content="Luis">
<style>
	<!--


@media screen and (max-width: 480px)

{

.screen-only

{

display: none;

}



.mobile-only

{

display: block;

}


}
body{
    background-image: url("FB_IMG_1443731826169-980x651.jpg");
}
div.card {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
    display: inline-block;

  }
  div.card1 {
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  display: inline-block;
  margin-top: 20px;
  }

div.header {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 30px;
}
div.headerarticle {
    background-color: #7d00fb;
    color: white;
    padding: 10px;
    font-size: 30px;	
}
div.headeradj {
    background-color: #990033;
    color: white;
    padding: 10px;
    font-size: 30px;
	margin-top: 20px;
}
div.headerpro {
    background-color: #ff3300;
    color: white;
    padding: 20px;
    font-size: 30px;
	margin-top: 20px;
}
div.headerverb {
    background-color: #0066cc;
    color: white;
    padding: 20px;
    font-size: 30px;
	margin-top: 20px;
}
div.container {
	background-color: white;
    padding: 10px;
	word-wrap: break-word;
	width: auto;
}
-->
</style>
        <title>Welcome <?php echo $row['userEmail']; ?></title>

   
        
    </head>
    <?php include "menux.php";?>
      <div class="card">
  <div class="header" align="center">
    <h1>Nouns</h1>
  </div>
  <div class="container">
A noun is a naming word for a living being, thing or idea, for example girl, sofa, anger, Rahul. <b> <font color="#990000">Learn all about Spanish Nouns.</font></b></div>
</div>
<div class="card1" >
  <div class="headerarticle" align="center">
    <h1>Articles</h1>
  </div>
  <div class="container">
A word like the, a and an used in front of a noun. <b> <font color="#990000">Learn all about Spanish Articles.</font></b></div>
</div>
<div class="card1" >
  <div class="headeradj" align="center">
    <h1>Adjectives</h1>
  </div>
<div class="container">
An adjective is a describing word that tells us more about a person or thing regarding their appearance, colour, size or other qualities such as nice, tall, fresh.<font color="#990000"><b> Learn all about Spanish Adjectives.</b></font></div>
</div>
<div class="card1" >
  <div class="headerpro" align="center">
    <h1>Pronouns</h1>
  </div>
<div class="container">
A pronoun is used instead of a noun as another means of naming someone or something directly for example he instead of Rahul, it instead of a watch and none etc.<font color="#990000"><b> Learn all about Spanish Pronouns.</b></font></div>
</div>
<div class="card1" >
  <div class="headerverb" align="center">
    <h1>Verbs</h1>
  </div>
<div class="container">
A verb is a doing word which describes what someone or something does, is , or what happens to them, for eg. Be,eat,work etc. <b><font color="#990000">Learn all about Spanish Verbs.</font></b></div>
</div>
		  
        <!--/.fluid-container-->
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
         <?php include "footer.php" ?>
    </body>

</html>