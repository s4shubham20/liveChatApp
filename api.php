<?php 

	require_once('classes/autoload.php');
	$dataobject = file_get_contents('php://input');
	echo "<pre>";
	print_r($dataobject);