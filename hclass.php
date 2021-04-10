<?php
	include "database.php";
	session_start();
	$s="delete from hclass where HID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('handle_class1.php?mes=Data Deleted..','_self');</script>";


?>