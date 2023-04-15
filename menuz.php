<html>
<style>
	<!--

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
body{
	 background: white;
	align: left;
	font-face: garamond;
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

{   /* Styles here */

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


div.place {
	display: inline-block;
   margin-left: 50px;
	}
div.place2 {
	display: inline-block;
	margin-left: 210px;
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> Sign in</i> 
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
                                <a href="index.php">Home</a>
                            </li>
						<li class="active">
                                <a href="dragquizdbperfecto.php">Pretérito Perfecto</a>
                            </li>
							<li class="active">
                                <a href="dragquizdbindef.php">Pertérito Imperfecto</a>
                            </li>
                            <li class="active">
                                <a href="dragquizdbimpfto.php">Pretérito Indefinido</a>
                            </li>
                            <li class="active">
                                <a href="dragquizdb.php" >Imperativos
                                </a>                                
                            </li>
                           
                        </ul>
						  
              
	
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