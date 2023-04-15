<html>
 <style>
	<!--

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
body{
	 background: white;
	min-height: 100%;
    padding-top: 10;
	padding-bottom: 0;
	padding-right: 0;
	padding-left: 0;
	text-decoration: none;
	
}
    
    div.sentence {background: white; margin-left: 10px;}
	}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    div.sentence {background: white; align: left; margin-left: 10px;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    div.sentence {background: white;}
} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    div.sentence {background: white;}
} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    div.sentence {background: white;}
}



.screen-only
{

display: none;

}



.mobile-only

{

display: block;

}
}


div.place {
	display: inline-block;
   margin-left: 50px;
	}

   -->
   </style>
    
   <body bgcolor="white">
	    <nav class="navbar navbar-inverse">
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i>Sign in</i> 
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
									    <a href="login.php">Login</a>
                                        <a href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
						<li class="active">
                                <a href="home.php">Student Zone</a>
                            </li>
							<li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <a href="aboutus.php">About Us</a>
                            </li>
                            <li class="active">
                                <a href="learnspanish.php" >Spanish Courses
                                </a>                                
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Spanish Grammer <b class="caret" style="color: red"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    
			<li><a class="dropdown-item" href="spanish_grammer.php">Spanish Grammer Library</a>						
             <li><a class="dropdown-item" href="#">Verbs</a>
              <li><a class="dropdown-item" href="#">Nouns</a>
			  <li><a class="dropdown-item" href="#">Adverbs</a>
			  <li><a class="dropdown-item" href="#">Adjectives</a>
			  <li><a class="dropdown-item" href="#">Prepositions</a></li>
                            
                          
                        </ul>
						  <li class="nav-item active">
            <a class="nav-link" href="#">Vocabulary</a>
          </li>
		  
	                            <li class="active">
                                <a href="corporate.php">Corporate Services & Spanish Translations
                                </a></li>
            
              
	
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
		</nav>
<div class="place">		
<table width="300" height ="10" align= "right">
<tr>
<td width="125">
<?php
echo "The time in Spain is  </td>";
echo "<td align='left'>"; 
include "clock.php";
echo "</td>";
?>
</td>
</table>
<br>
</div>
<!--/.fluid-container-->
        

</html>