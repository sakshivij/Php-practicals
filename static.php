<!doctype html>
<html>
<body>

<?php 
	
	function myfunc()
	{
		//Static variable	
		static $x=10;
		echo "<p>The value of x is $x</p>";
		$x++;	
	}
	myfunc();
	myfunc();
	myfunc();
	
?>
</body>
</html>