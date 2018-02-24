<html>
	<?php
	if(isset($_POST['send'])){
		$name = $_POST['name'];
	   session_start();
		$_SESSION['name']=$name;
		header('location:page2.php');
	}
	
	?>
	
<body>
	
	<form action="page1.php" method="post">
        NAME:<input type="text" name="name" >
		     <input type="submit" name="send" value="next">

	
	</form>
	<h1>hii</h1>
	</body>

</html>