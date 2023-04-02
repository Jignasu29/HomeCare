<?php
if(isset($_POST['next']))
{
	if(!empty($_POST['elec'])) 
	{
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['elec']);

	echo "You have selected following ".$checked_count." option(s): <br/>";
	// Loop to store and display values of individual checked checkbox.

	foreach($_POST['elec'] as $selected) 
		{
			echo "<p>".$selected ."</p>";
		}
	echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
	}
	else
	{
		echo "<b>Please Select Atleast One Option.</b>";
	}
}
?>