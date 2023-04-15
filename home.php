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
}
div.card {
  width: 320px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  margin-top: 20px;
    display: inline-block;
  }
  div.card1 {
  width: 400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  display: inline-block;

  }
  div.card2 {
  width: 400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  display: inline-block;
}
div.card3 {
  width: 320px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-left: 50px;
  margin-top: 20px;
  display: inline-block;
}

div.header {
    background-color: #4CAF50;
    color: white;
    padding: 0px;
    font-size: 20px;
}
div.headerarticle {
    background-color: #7d00fb;
    color: white;
    padding: 0px;
    font-size: 20px;
	
}

div.container {
    padding: 10px;
	word-wrap: break-word;
	width: auto;
}
-->
</style>
        <title>Welcome <?php echo $row['userEmail']; ?></title>

   
        
    </head>
    
    <body bgcolor="white">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $row['userEmail']; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="aboutus.php">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Spanish Courses <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    
									<li><a class="dropdown-item" href="#">DELE A1</a></li>
              <li><a class="dropdown-item" href="#">DELE A2</a></li>
              <li><a class="dropdown-item" href="#">DELE B1</a></li>
			  <li><a class="dropdown-item" href="#">DELE B2</a></li>
			  <li><a class="dropdown-item" href="#">DELE C1</a></li>
			  <li><a class="dropdown-item" href="#">DELE C2</a></li>
                                
                            </li></ul>
                            <li class="dropdown">
                                <a href="learnspanish.php" data-toggle="dropdown" class="dropdown-toggle">Spanish Grammer <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    
									
             <li><a class="dropdown-item" href="#">Verbs</a>
              <li><a class="dropdown-item" href="#">Nouns</a>
			  <li><a class="dropdown-item" href="#">Adverbs</a>
			  <li><a class="dropdown-item" href="#">Adjectives</a>
			  <li><a class="dropdown-item" href="#">Prepositions</a></li>
                            
                         </li>   
                        </ul>
						  <li class="nav-item active">
            <a class="nav-link" href="#">Vocabulary</a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="#">Free for all</a>
          </li>
	                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Corporate Services <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
<li><a class="dropdown-item" href="#">Corporate Training</a></li>
              <li><a class="dropdown-item" href="#">Translation services</a></li>
              <li><a class="dropdown-item" href="#">Interpretor</a></li>
			  <li><a class="dropdown-item" href="#">Professional business Letters</a></li>                                    
									</li>   
                        </ul>
	
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
<table>
<tr>
<td>
<?php
echo "The time in Spain is  </td>";
echo "<td>"; 
include "clock.php";
echo "</td>";
?>
</td>
</tr>
</table>
<div>

      <div style="position:absolute; right: 20px; top: 50px;">
       <img src="/espanol2.jpg" width="350" height="50" alt="" align ="right"> 
      </div>
</div>
<br>
<br>
       <div class="card">
  <div class="header" align="center">
    <img src="spaincl.jpg">
  </div>
  <div class="container">
  <h3>Learn Spanish</h3>
A noun is a naming word for a living being, thing or idea, for example girl, sofa, anger, Rahul. Learn all about Spanish Nouns.</div>
</div>
<div class="card1">
  <div class="headerarticle" align="center">
    <img src="ainsa-600x400.jpg">
  </div>
  <div class="container">
      <h3>Enhance your Vocabulary</h3>
A word like the, a and an used in front of a noun. Learn all about Spanish Articles.</div>
</div>

<div class="card2" >
  <div class="headerarticle" align="center">
      <a href="spanish_grammer.php"><img src="cordoba.jpg"><a>
  </div>
  <div class="container">
      <h3>Spanish Grammer</h3>
A word like the, a and an used in front of a noun. Learn all about Spanish Articles.</div>
</div>
<div class="card3" >
  <div class="headerarticle" align="center">
      <a href="dele.php"><img src="Screenshot_2016-03-15-11-50-220.jpg"><a>
  </div>
  <div class="container">
      <h3>DELE</h3>
A word like the, a and an used in front of a noun. Learn all about Spanish Articles.</div>
</div>
<br>
<br>
		  
        <!--/.fluid-container-->
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
 <?php include "footer.php" ?>
        
    </body>
</html>