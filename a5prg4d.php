<?php 

$id = "";
$conn ="";

$conn = mysqli_connect("localhost", "root", "", "passport");

if(!empty($_POST['accno'])){



$conn = mysqli_connect("localhost", "root", "", "passport");

// Check connection
if($conn === false){

echo "connection not possible";

}

$id=$_POST['accno'];

$query = "DELETE FROM passport_table WHERE passnum='$id'";

if ( $conn->query($query)== TRUE  &&  $conn->affected_rows > 0 ) {

echo " <h4> 1 record successfully deleted !</h4>";

}else{

echo  "<h2>Error:</h2>" . $query  .  "<br>"  . "<h4>This above query doesnt match.! to any record!"  .  $conn->error;
}


}





?>



<!DOCTYPE html>
<html>
<head>

</head>
<body>


<div>

<form>

<label>Enter the account number u want to delete.</label>

<input type="number" name="accno" placeholder="Enter account number here!" required>

<br>
<hr>

<input type="submit" name="Delete" value="Delete"> <a href="a5prg4.php" role="button">Go back</a>

</form>

</div>


</body>
</html>