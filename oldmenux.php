<html>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> Sign in</i> 
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
									    <a tabindex="-1" href="login.php">Login</a>
                                        <a tabindex="-2" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
						<li class="active">
                                <a href="index.php">Home</a>
                            </li>
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
<table width="1200" height ="10">
<tr>
<td align="right">
<?php
echo "The time in Spain is  </td>";
echo "<td align='left'>"; 
include "clock.php";
echo "</td>";
?>
</td>
<td>
</td>
<td>
       <img src="espanoltrans.gif" width="250" height="50" alt="" align ="right">     
</td>
</tr>
</table>
</html>