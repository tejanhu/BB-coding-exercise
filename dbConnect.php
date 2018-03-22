<?php
$conn = mysql_connect('localhost', root, 'happy123', 'testdb');

if($_REQUEST['name']){
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	$comm = $_REQUEST['comm'];
	$password = $_REQUEST['password'];

	$q = "insert into user values('$name','$email','$gender','$comm','$password')";

	$query = mysqli_query($conn, $q);

	if($query){
		echo 'data successfully inserted';
	}
}

?>