
<link rel = "stylesheet" type="text/css" href="navmenu.css">
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Student Zone</a>
  <a href="index.php">Home</a>
  <a href="aboutus.php">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Spanish Grammer
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="verbs.php">Verbs</a>
      <a href="nouns.php">Nouns</a>
      <a href="adverbs_common.php">Adverbs</a>
    </div>
  </div>
  <a href="#about">Vocabulary</a>
    <div class="dropdown">
<button class="dropbtn" >Sign In
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

									    <a href="login.php">Login</a>
                                        <a href="logout.php">Logout</a>
                        </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div></div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

