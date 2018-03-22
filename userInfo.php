<?php
// enables user to connect to database
include_once('dbConnect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$happy_to_receive = $_POST['happy_to_receive'];
$password = $_POST['password'];

if(mysql_query
	("INSERT INTO user VALUES
		('$name','$email','$gender','$happy_to_receive','$password')")){
	echo "Successfully Inserted";
}
else{
	echo "Insertion Failed"
}

?>