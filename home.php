<?php 
	if(isset($_COOKIE['status']))
	{
?>

<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>Welcome Admin</h1>
	<a href="create.php"> Create New </a> | 
	<a href="userlist.php"> User List </a> | 
	<a href="logout.php"> logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>