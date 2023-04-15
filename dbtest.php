<?php
$servername = "localhost";
$username = "u975192185_student";
$password = "mIxR5STZ^x7";
$dbname = "u975192185_practice";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo"hello";
$sql_query = "SELECT verb_sp, verb_en, imp_aftu, imp_afel, imp_afnos,	imp_afvos, imp_afellos FROM verbs;
        $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
	while( $row = mysqli_fetch_assoc($resultset) ) {
?>		

        <div class="content">
    <div id="dragScriptContainer">
	<div id="questionDiv">
		<div class="dragDropSmallBox" id="q1"><?php echo $row["verb_sp"];>t&#250; </div>
<?php } ?>