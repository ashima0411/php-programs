<?php
echo"ashima<br>";
$email="ashimamehta0411.com";
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)=== true)
{
	echo("$email is a valid email address");
}else
{
	echo("$email is not a valid email address");
}
?>