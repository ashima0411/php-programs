<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF'] ?> Method= GET >
name:<input type="text" name="name">
rollno:<input type="text" name="rollno">
<input type="submit" name="submit">
</form>
</body>
</html>


<?php
	if(isset($_GET['submit']))
	{
		echo $_GET['name'];
		echo $_GET['rollno'];
	}
?>