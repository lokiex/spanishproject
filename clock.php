<script type="text/javascript">
var JST = new Date('<?php date_default_timezone_set('Europe/Madrid'); echo date("d M Y H:i:s")?>');setInterval(UpdateClock, 1000);
function UpdateClock()
{
	JST.setTime(JST.valueOf() + 1000); // advance the time
	document.getElementById('clock').innerHTML = JST.toLocaleString(); // update display
}
</script>
<div id="clock"></div>