<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript"></script>
<body>
<?php
require_once("DBconnect.php");
	$query1 ="SELECT * FROM doctor where UPPER(Region) like UPPER('%".$_POST["City"]."%')";
	$results1 = $conn->query($query1);
?>
	<option value="">Select Doctor</option>
<?php
	while($rs1=$results1->fetch_assoc()) {
?>
	<option value="<?php echo $rs1["DID"]; ?>"><?php echo $rs1["Name"]."-(Region: ".$rs1["Region"].")"; ?></option>
<?php

}
?>
</body>
</html>