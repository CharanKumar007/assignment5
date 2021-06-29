<?php
define('DIR','');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<form action="#" method="post">
		<div>
	  	<div>
		    <div>
		    	<div>Bank (Balance Enquery) </div>
		    	<table border="1">
		    		<tr>
		    			<th>Account Number</th>
		    			<td><input type="text" name="acno" id="acno"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="SUBMIT"></td>
		    		</tr>
		    	</table>
		    </div>
		</div>
	</div>
	</form>
</body>
</html>

<?php
if (isset($_POST['save'])) {

	$con = mysqli_connect("localhost","root","","mydb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
if (!$qry) {
	echo "Account nummber not found";
}else{
		$qry1 = mysqli_fetch_array($qry, MYSQLI_ASSOC);
		echo "Name :".$qry1['fname']." ".$qry1['lname']."<br>";
		echo "Total Balance is Rs.".$qry1['balance'];
}
}
?>