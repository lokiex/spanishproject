<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
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
    background: white;
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
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="index.php">About Us</a>
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
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Spanish Grammer <b class="caret"></b>

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
<div class="container">

      <div class="starter-template"><br>
       <img src="/spanishindia2.jpg" width="350" height="50" alt="" align ="right"> 
      </div>
</div>
<br>
<br>
<br>
<br>
<br>

<table align="center" width="1200" height="200">
      <tr>
		  <td bgcolor="pink" width="250" cellspacing="20"><h5 align="center">Nouns</h5><br><align="right"> A noun is a naming word for a living being, thing or idea, for example girl, sofa, anger, Rahul. Click to learn more about Spanish Nouns.

          </td>
		  <td align="center" width="100">Articles
          </td>
		  <td align="center" width="100">Adjectives
          </td>
		  <td>
	      Pronouns	  
          </td>
		  <td align="center" width="100">Verbs
          </td>
		  <td align="center" width="250">Negative questions
		</td>		  
		  <td align="center" width="100">Adverbs
          </td>
		  <td align="center" width="100">Prepositions
          </td>
      </tr>
	  <tr>
	       <td align="center" width="100">
		   Conjunctions
		   </td>
		  <td align="center" width="100">Spelling
          </td>
		  <td align="center" width="100">Stress
          </td>
		  <td align="center" width="100">Numbers
          </td>
		  <td align="center" width="150">Time date
          </td>
		  
	  </tr>	  
</table>        
        <!--/.fluid-container-->
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>
        
    </body>

</html>