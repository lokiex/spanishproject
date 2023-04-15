<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7174188-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-7174188-3');
</script>
<?php
include "sessionstart.php";
include "menusp.php";
?>
<style>
#tglDIV {
    width: 200px;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
}
#myDIV {
    width: 200px;
    padding: 50px 0;
	opacity: 1;
    text-align: center;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-color: lightgreen;
    margin-top: 20px;
	
    border-radius: 5px;	display: inline-block;
}
#myDIVa {
    width: 200px;
    padding: 50px 0;
	opacity: 1;
    text-align: center;
    margin-top: 20px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
	display: none;
}
#myDIV2 {
    width: 200px;
    padding: 50px 0;
	opacity: 1;
    text-align: center;
    background-color: lightgreen;
    margin-top: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;	display: inline-block;
}
#myDIVb {
    width: 200px;
    padding: 50px 0;
	opacity: 1;
    text-align: center;
    margin-top: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
display: none;
	}

#showDIV {
    width: 200px;
    padding: 50px 0;
    text-align: center;
    background-color: violet;
    margin-top: 20px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	margin-left: 20px;
	display: inline-block;
	border-radius: 5px;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
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

        a[bubbletooltip]:before
        {
                content: "";
                position: absolute;
                border-top: 26px solid #292f45;
                border-left: 26px solid transparent;
                border-right: 26px solid transparent;
                visibility: hidden;
                top: -20px;
                left: -12px;
        }

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
<body style="text-align:center;">
<table>
<tr>
<td>
<div id="showDIV">
<div>
Meaning
</div>
<hr>
<div>
mine
</div>
<hr>
<div>
yours (belonging to tú)
</div>
<hr>
<div>
his; hers;its;yours (belonging to usted)
</div>
<hr>
<div>
yours (belonging to vosotros/vosotras)
</div>
<hr>
<div>
theirs;yours (belonging to ustedes)
</div>
<hr>
</td>
<td><div id="myDIV">
<div
>
Singular (Masculine)
</div>
<hr>
<div>
el mío
</div>
<hr>

<div>
el tuyo
</div>
<hr>
<div>
el suyo
</div>
<hr>
<div>
el nuestro
</div>
<hr>
<div>
el vuestro
</div>
<hr>
<div>
el suyo
</div>
<hr>
</div></td>
<td><div id="myDIVa">
<div>
Practise
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
<hr>
</div>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
</div></td>
<td><div id="myDIV2">
<div>
Singular (Feminine)
</div>
<hr>
<div>
la mía
</div>
<hr>

<div>
la tuya
</div>
<hr>
<div>
la suya
</div>
<hr>
<div>
la nuestra
</div>
<hr>
<div>
la vuestra
</div>
<hr>
<div>
la suya
</div>
<hr>
</div></td>
<td>
<div id="myDIVb">
<div>
Practise
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
<hr>
</div>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
<div>
<form>
<input type ="text" size="20" style="border: none" value="Enter your answer here"  onfocus="if(this.value=='Enter your answer here') {this.value='', this.style.color='black'};" onblur="if(this.value=='') {this.value='Enter your answer here', this.style.color='grey';}" />
</form>
</div>
<hr>
</div></td>
</tr>
</table>
<table align="center"><tr><td>
<button color="orange" class="button button1" onclick="myFunction()">Manage View</button></div></td></tr></table>
<p><b>Note:</b>Click on the Manage View button and hide the answers to take a test. You can input your answers and click again to compare.</p>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
	var a = document.getElementById("myDIVa")
    if (x.style.display === "none") {
        x.style.display = "block";
		a.style.display = "inline-block";
    } else {
        x.style.display = "none";
		a.style.display = "block";
    }
	var y = document.getElementById("myDIV2");
	var b = document.getElementById("myDIVb");
    if (y.style.display === "none") {
        y.style.display = "block";
		b.style.display = "block";
    } else {
        y.style.display = "none";
		b.style.display = "block";
    }
}
</script>
 <?php include "footer.php" ?>
</body>
</html>