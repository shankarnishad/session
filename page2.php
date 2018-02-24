<?php
session_start();
echo "Hello mr. ".$_SESSION['name']."<br>";
echo "successfully leared session";
//session_destroy();
?>
<html>
<body>
	<form action="page3.php" method="post"> 
	<input type="submit" name="send">
	</form>
	
	</body>

</html>