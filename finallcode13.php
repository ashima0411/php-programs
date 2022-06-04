<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF'] ?> Method= POST >
name:<input type="text" name="name">
rollno:<input type="text" name="rollno">
<input type="submit" name="submit">
</form>
</body>
</html>


<?php
	if(isset($_POST['submit']))
	{
		echo $_POST['name'];
		echo $_POST['rollno'];
	}
?>