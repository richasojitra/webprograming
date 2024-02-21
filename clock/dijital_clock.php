<html>
<body>
<head>
<meta http-equiv="refresh" content="1">
<style>
.a
{
	
	background-color:black;
	color:red;
    border-color:gray;
    	

}
	




</style>
</head>
</body>
</html>



<?php
echo "<table colspan=4 border=4 class=a>";
echo "<tr>";
echo "<td>";
$A=date("d-M-y");
        echo $A;
		echo "<br>";
echo "</td>";
echo "<tr>";
echo "<tr>";
echo "<td>";		
date_default_timezone_set("Asia/kolkata");
echo date("H:i:s a");
echo "</td>";
echo "</tr>";
echo "</table>";

?>
