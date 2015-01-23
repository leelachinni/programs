<!DOCTYPE html>
<html>
<body>
	<?php
	$x=10;//global vaeriable
	function mytest(){
		$y=20;//local variable
		//echo "global varaiable inside the function is". $x;//accessing global variable inside the function 
		echo "local variable inside the function is".$y."<br>";//accessing local variable inside the function
	}
	mytest();
		echo "global variable outside the function is".$x;//accessing global variable outside the function
		//echo "local variable outside the function is".$y;//accessing local varaiable outside the function
	?>
</body>
</html>	