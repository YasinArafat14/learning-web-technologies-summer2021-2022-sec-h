<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$text = $_REQUEST['number'];



$fname = $_REQUEST['fname'];

if($username == null || $password == null || $text == null){
	echo "null username/password/text...";
}else{
		$user = $text."|".$username."|".$password."\r\n" ; 
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create'){
			header('location: home.php');
		}else{
			header('location: login.html');			
		}

}

?>