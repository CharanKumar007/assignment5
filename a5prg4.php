<?php


$conn = mysqli_connect("localhost", "root", "", "passport");

// Check connection
if($conn === false){

echo "connmection not possible";

}



if(isset($_POST['submit'])){

$passnum=  $_REQUEST['num'];
$fname = $_REQUEST['fname'];
$sname =  $_REQUEST['sname'];
$dob= $_REQUEST['dob'];
$nation= $_REQUEST['nation'];
$address = $_REQUEST['address'];
$gender = $_REQUEST['gender'];
$pic = $_REQUEST['photo'];

$message = " ";

//performing insertion to database..

$sql = "INSERT INTO passport_table  VALUES ('$passnum', '$fname','$sname','$dob','$nation','$address','$gender','$pic')";

if(mysqli_query($conn, $sql)){

echo"<h3>data succesfully inserted</h3> ";

echo'<a href="a5prg4.php" class="button" title="goback">';


} else{

echo "<h4>ERROR: Hush! Sorry $sql. </h4>" 
. mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

}



?>

<!DOCTYPE html>
<html>
<head>

<style type="text/css">

table{

border:  2px solid black;
border-radius: 19px;
margin-left: 400px;
margin-top: 50px;
}

table, tr{

border: 1px solid black;
}

table, tr, td{

border: 2px solid black;
padding: 5px;
}
.butt{

margin-left: 450px;
padding: 20px;
}

</style>
</head>
<body>



<div>
<div>

<form action="" method="post">

<header><h1><center>PASSPORT FORM</center></h1></header>
<hr>
<table>

<tr>
<td>Enter passport num:</td>
<td><input type="number" name="num" required></td>

</tr>

<tr>
<td>Enter first name:</td>
<td><input type="text" name="fname" required></td>

</tr>

<tr>
<td>Enter second name:</td>
<td><input type="text" name="sname" required></td>

</tr>

<tr>
<td>Enter date of birth:</td>
<td><input type="date" name="dob" required></td>

</tr>

<tr>
<td>Enter Nationality:</td>
<td><input type="text" name="nation" required></td>

</tr>

<tr>
<td>Enter address:</td>
<td><textarea name="address" ></textarea></td>

</tr>
<tr>
<td><label for="gender">Enter gender here:</label></td>
<td>Male: <input type="radio" name="gender" value="Male"> Female:<input type="radio" name="gender" value="female"> Other:<input type="radio" name="gender" value="other"></td>

</tr>

<tr>
<td>Upload Picture:</td>
<td><input type="file" name="photo"></td>

</tr>

<tr>
<th  colspan="2"><button class="btn btn-primary"><input type="submit" name="submit" value = "ADD"></a></button>






</tr>



</table>



</form>



<div class="butt">
<a href="a5prg4d.php"  role="button" class="btn btn-danger">Delete</a>
<a href="a5prg4u.php"  role="button" class="btn btn-info">Update</a>
</div>
</div>
<hr>
<hr>
</div>

</body>
</html>