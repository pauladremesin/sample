<?php

require 'connection.php';
$ID = $_GET['ID'];

$result = mysqli_query($con,"SELECT * FROM `admin_list` WHERE `ID`='$ID'");

while ($row = mysqli_fetch_array($result)) {
	$fi= $row['name'];
	// $queryActionLog = mysqli_query($con,
 //              "INSERT INTO `tblactionlogs`( `Description`, `Data_Affected`, `On_Table`,`Action_Date`,`Action_Time`) VALUES('Deleted','$fi','Accounts','".date("Y-m-d")."','".date("h:i:sa")."')");   

}

 	$sql = 'DELETE FROM admin_list WHERE ID=:ID';
$statement = $dbc->prepare($sql);
if ($statement->execute([':ID' => $ID])) {
	 header("Location: admin.php");
}

?>
	
 