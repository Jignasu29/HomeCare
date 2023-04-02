<?php
session_start();

include_once 'conn.php';

class Crud extends conn
{
	public function __construct()
	{
		parent::__construct();
	}


	public function getData($que)
	{
		$result=$this->dbh->query($que) or die($this->dbh);
		if ($result==false) {
			# code...
			
			return false;
			
		}

		$rows=array();

		while($row=$result->fetch_assoc())
		{
			$rows[]=$row;
		}
		return $rows;
	}

	public function execute($que)
	{
		$result=mysqli_query($this->dbh,$que) or die(mysqli_error($this->dbh));
		echo "$result";

		if ($result==false) {
			# code...
			echo "Error:cannot execute the command";
			return false;
		}
		else
		{
			return true;
		}
	}

	public function delete($id,$table)
	{
		# code...
		echo "<br>";
		$query="delete from $table where id='$id'";
		echo "$query";
		
		$res=$this->dbh->query($query); 
		#or die($this->dbh);

		if ($res==false) {
			# code...
			echo "<br>";
			echo "Error:cannot deleted id ".$id." from table ".$table;
			return false;
		}
		else{
			return true;
		}

	}

	public function escape_string($value)
	{
		return $this->dbh->real_escape_string($value);
	}
}

?>