<?php
//functions
function checkDuplicate($tbl, $where){
	global $con;
	$q = mysqli_query($con, "SELECT * FROM $tbl WHERE $where");
	if(mysqli_num_rows($q) > 0){return true;}else{return false;}
}
?>
