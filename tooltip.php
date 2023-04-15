<!DOCTYPE html>
<html class="no-js">
    
    <head>
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
body
        {
            	font-family:Georgia,"Times New Roman",Times,serif;
            	font-size:medium;
                line-height: 150%;
        }
   
        a[bubbletooltip]:link, a[bubbletooltip]:visited
        {
            	text-decoration: none;
            	position: relative;
            	color: blue;
        }

       /* a[bubbletooltip]:before
        {
                content: "";
                position: absolute;
                border-top: 26px solid #292f45;
                border-left: 26px solid transparent;
                border-right: 26px solid transparent;
                visibility: hidden;
                top: -20px;
                left: -12px;
        }*/

 a[bubbletooltip]:after
        {
                position: absolute;
                content: attr(bubbletooltip);                
                font-weight: bold;
                top: -35px;
                left: -26px;
                background: #292f45;
                color: #FFFFFF;
                padding: 5px 10px;
                -moz-border-radius: 6px;
                -webkit-border-radius:6px;
                -khtml-border-radius:6px;
                border-radius: 6px;
                white-space: nowrap;
                visibility: hidden;
        }

        a[bubbletooltip]:hover:before, a[bubbletooltip]:hover:after
        {
                visibility: visible;
                -moz-transition: visibility 0s linear .3s;
        }


.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
    width: 150px !important;
	padding: 0px 0px !important;
    margin: 0px 0px !important; 
    box-sizing: border-box !important;
}

</style>
</head>
<p align="center">
<?php
$servername = "qzt688.spanishindia.com";
$username = "qzt688";
$password = "blessdeepA0";
$dbname = "qzt688";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
$sql = "SELECT * FROM grammer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
	<br>
	<br>
<a href="#" bubbletooltip="<?php echo $row['E1'];?>"> <?php echo $row['S1'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E2'];?>"> <?php echo $row['S2'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E3'];?>"> <?php echo $row['S3'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E4'];?>"> <?php echo $row['S4'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E5'];?>"> <?php echo $row['S5'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E6'];?>"> <?php echo $row['S6'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E7'];?>"> <?php echo $row['S7'];?></a>
<a href="#" bubbletooltip="<?php echo $row['E8'];?>"> <?php echo $row['S8'];?></a>
<br>
<?php echo $row['ES'];
    }
} else {
    echo "0 results";
}

$conn->close();?>
</p>
 <?php include "footer.php" ?> <?php include "footer.php" ?>
</html>