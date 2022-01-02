<?php

session_start();

if(session_destroy())
{
	//header(Location:main.php);
	echo '<script> window.location.href="main.php";</script>';
}

?>