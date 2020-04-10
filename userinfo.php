<?php

$con = mysqli_connect('localhost', 'root','Chandan@123');

if ($con) {
	echo "connected";
}else

	echo "not connected ";

mysqli_select_db($con, 'newwebsite');

echo $user = $_POST['user'];
echo $email = $_POST['email'];
echo $mobile = $_POST['mobile'];
echo $comment = $_POST['comment'];

$query = "insert into userinfodata (user, email, mobile, comment) values('$user', '$email', '$mobile','$comment')";

mysqli_query($con,$query);

header('location: index.php')


?>