<!doctype html>
<html>
<body>
<!-- Three types of array: index, associative and multidimensional -->
<?php

	$age=array("Sam"=>"22","Johny"=>"35");
	foreach($age as $x => $x_value) {
    		echo "Key=" . $x . ", Value=" . $x_value;
    		echo "<br>";
	}

?>
</body>
</html