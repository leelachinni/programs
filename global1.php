<?php
$x=10;//gloabl variable
$y=20;//global variable
function mytest(){
	global $x,$y;//accessing gloabl variable by using global keyword
	$y=$x+$y;//adding global variables
	
}
mytest();
echo $y;//to print output result
?>