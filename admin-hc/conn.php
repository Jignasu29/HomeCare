<?php

class Conn
{
	var $h="localhost";
	var $un="root";
	var $pwd="";
	var $db="homecare";
	var $dbh=NULL;

	public function __construct()
	{

		$con=mysqli_connect($this->h,$this->un,$this->pwd,$this->db);
		$this->dbh=$con;

		if($con)
		{
			echo "connected";
		}
		else
		{
			echo "not connected";
		}
	}

}

$obj1=new Conn;
	

?>