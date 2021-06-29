<?php
define('DIR','');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<form action="a5prg2s.php" method="post">
		<div>
	  	<div>
		    <div>
		    	<div>JSD FLIGHTS </div>
		    	<div>
				<label>---------------------------------------------------</label><br>
		    		<label>Thank You for choosing JSD Flight</label>
		    	</div>
		    	<div>
		    		<label>The Cookie values are</label>
		    	</div>
		    	<div>
		    		<label>Name : <?php echo $_COOKIE["name"]; ?></label><br>
		    		<label>Seat : <?php echo $_COOKIE["seat"]; ?></label><br>
		    		<label>Food : <?php echo $_COOKIE["meal"]; ?></label><br>
		    		<label>---------------------------------------------------</label>
		    	</div>
		    </div>
		</div>
	</div>
	</form>
</body>
</html>